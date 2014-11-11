<?php
	if (!isset($_SESSION)) session_start();
	include('../../../start.php');
	fnc_autentificacion();
	$per_id = fnc_varGetPost('per_id');
	$odo_bloque = $_POST['odo_bloque'];
	$odo_posicion = $_POST['odo_posicion'];
	$odo_ubicacion = $_POST['odo_ubicacion'];

	$sql = sprintf("SELECT * FROM odontograma INNER JOIN persona ON  persona.per_id=odontograma.per_id WHERE persona.per_id=%s AND odo_bloque=%s and odo_posicion=%s and odo_ubicacion=%s",
		GetSQLValueString($per_id, 'int'),
		GetSQLValueString($odo_bloque, 'int'),
		GetSQLValueString($odo_posicion, 'int'),
		GetSQLValueString($odo_ubicacion, 'int'));
	$query = mysql_query($sql, $conexion_mysql) or die(mysql_error());
	 
if($odo_bloque =='1' & $odo_posicion == '1' & $odo_ubicacion =='1'){
	$odo_row1 = mysql_fetch_assoc($query);
	return $odo_row1; 
	
}
mysql_free_result($query);
?>
