<?php
	if (!isset($_SESSION)) session_start();
	include('../../../start.php');
	fnc_autentificacion();
	
	$sql = "SELECT * FROM reservar_cita";
	$query = mysql_query($sql) or die(mysql_error());
	while($row = mysql_fetch_array($query)) {
		$tratamiento = fnc_datTra($row['tra_id']);
		$turno = fnc_getTurno($row['id_turno']);

		$datos[] = array(
			'id' => $row['ID_RESERVAR_CITA'],
			'title' => $row['rci_nombre_paciente'].' ('.$tratamiento['tra_nom'].')',
			'start' => $row['rci_fecha_atencion'].' '.$turno['tur_hora'],
			'end' => $row['rci_fecha_atencion'],
			'url' => $row['rci_nombre_paciente'],
			//'color' => '#f00'
		);
	}
	echo json_encode($datos);
?>