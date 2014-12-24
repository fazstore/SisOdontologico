<?php 
	if (!isset($_SESSION)) session_start();
	include('../../../start.php');
	fnc_autentificacion();
	
	$fecha = $_POST['fecha'];
	$id_turno = $_POST['id_turno'];
	$paciente = $_POST['paciente'];
	$id_trat = $_POST['id_trat'];
	$observaciones = $_POST['observaciones'];
	
	if(isset($fecha) != "" && isset($id_turno) > 0 && isset($paciente) != "" && isset($id_trat) > 0) {
		mysql_query('SET AUTOCOMMIT=0;'); //Desabilita el autocommit
		mysql_query('BEGIN;'); //Inicia la transaccion
	
		$sql = sprintf('INSERT INTO reservar_cita (tra_id,id_turno,rci_fecha_atencion,rci_nombre_paciente,rci_observaciones,rci_usuario_creacion,rci_fecha_creacion,rci_eliminado) VALUES (%s,%s,%s,%s,%s,%s,%s,%s)',
		GetSQLValueString($id_trat, 'int'),
		GetSQLValueString($id_turno, 'int'),
		GetSQLValueString($fecha, 'text'),
		GetSQLValueString($paciente, 'text'),
		GetSQLValueString($observaciones, 'text'),
		GetSQLValueString('', 'text'),	
		GetSQLValueString($sdatet, 'text'),
		GetSQLValueString('N', 'text'));
		$query = mysql_query($sql);
		$error = mysql_error();
		
		if($error == NULL){ //Si no hubo errores COMMIT caso contrario ROLLBACK
			mysql_query('COMMIT;');
			$data['state'] = true;
 			$data['message'] = 'SE RESERVÓ CORRECTAMENTE LA CITA PARA: '.$paciente;
		}else{
			mysql_query('ROLLBACK;');
			$data['state'] = false;
			$data['message'] = 'SE PRODUJO UN ERROR AL RESERVA LA CITA.<br/>'.$error;
		}
		
		mysql_query('SET AUTOCOMMIT=1;'); //Habilita el autocommit
		
		echo json_encode($data);
	}
?>