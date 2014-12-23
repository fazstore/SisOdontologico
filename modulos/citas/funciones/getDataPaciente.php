<?php
	if (!isset($_SESSION)) session_start();
	include('../../../start.php');
	fnc_autentificacion();
	
	$id_pac = $_POST['q'];

	if($id_pac > 0) {
		$sql = sprintf("SELECT * FROM persona INNER JOIN paciente ON persona.per_id = paciente.per_id WHERE paciente.pac_eliminado = 'N' AND paciente.pac_id = %s",
		GetSQLValueString($id_pac,'int'));
		$query = mysql_query($sql) or die(mysql_error());
		$row = mysql_fetch_assoc($query);
		$totRows = mysql_num_rows($query);
					 
		if($totRows > 0){
			$data['documento'] = $row['per_documento'];
			$data['nombre'] = $row['per_nombre'];
			$data['ciudad'] = $row['per_ciudad_nac'];
		}
	}

	mysql_free_result($query);
	echo json_encode($data);
?>