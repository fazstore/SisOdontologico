<?php
	if (!isset($_SESSION)) session_start();
	include('../../../start.php');
	fnc_autentificacion();
	$per_doc=$_POST['docu'];
	if($per_doc){
	$sql = sprintf("SELECT * FROM persona inner join telefono on persona.per_id= telefono.per_id  
WHERE tel_tipo ='Convencional' and persona.per_documento =".$per_doc);
	$query = mysql_query($sql, $conexion_mysql) or die(mysql_error());
		while($rows = mysql_fetch_array($query)){
		$datos[] = array('nom_res' => $rows['per_nombre'], 'doc_res' => $rows['per_documento'], 'tel' => $rows['tel_numero'], 'email' => $rows['per_mail'], 'direc_res' => $rows['per_direccion1']);
	}	
	}
	if($datos){
	echo json_encode($datos);
	//echo $per_doc;
	return($datos);
	}
	else{
		echo "BORRAR";
		}
?>
