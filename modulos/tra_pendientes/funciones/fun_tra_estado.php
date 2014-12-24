<?php
include('../../../start.php');
fnc_autentificacion();
$det_tra_rea_id = fnc_varGetPost('det_tra_rea_id');

mysql_query("SET AUTOCOMMIT=0;", $conexion_mysql); //Desabilita el autocommit
mysql_query("BEGIN;", $conexion_mysql); //Inicia la transaccion
$sqlup_tra = sprintf("UPDATE detalle_tratamientosxrealizar SET det_tra_rea_estado = 'R' WHERE det_tra_rea_id='" .$det_tra_rea_id."' and det_tra_rea_estado = 'F'");
$queryup_tra= mysql_query($sqlup_tra, $conexion_mysql) or die(mysql_error());
mysql_query("COMMIT;", $conexion_mysql);


//Si no hubo errores COMMIT caso contrario ROLLBACK
if($queryup_tra){
    mysql_query("COMMIT;", $conexion_mysql);
    $MSG = 'Tratamiento Realizado Exitosamente.';
    $MSGdes = 'Registro Actualizado';
    $MSGimg = $RUTAi.'ok.png';
}else{
    mysql_query("ROLLBACK;", $conexion_mysql);
    $MSG = 'Error al Actualizar.';
    $MSGdes = $error;
    $MSGimg = $RUTAi.'delete.png';
}
mysql_query("SET AUTOCOMMIT=1;", $conexion_mysql);

$_SESSION['MSG'] = $MSG;
$_SESSION['MSGdes'] = $MSGdes;
$_SESSION['MSGimg'] = $MSGimg;
header("Location: ".$RUTAm."historia_clinica/historia_clinica_form.php?per_id=".$per_id."&accion=Ver");