<?php 
	include('../../../start.php');
	fnc_autentificacion();
	$per_id = fnc_varGetPost('per_id');
	$suc_nombre = $_POST['suc_nombre'];
	$suc_direccion = $_POST['suc_direccion'];
	$suc_ciudad = $_POST['suc_ciudad'];
	$suc_postal = $_POST['suc_postal'];
	$suc_telefono = $_POST['suc_telefono'];
	$suc_eliminado = $_POST['suc_eliminado'];
	
	$accion = fnc_varGetPost('accion');
	$menus = $_POST['menus'];
	$contMenus = count($menus);

	if($accion=='Actualizar'){
		mysql_query("SET AUTOCOMMIT=0;", $conexion_mysql); //Desabilita el autocommit
		mysql_query("BEGIN;", $conexion_mysql); //Inicia la transaccion
		
		
	
		//Query 1
		$sql = sprintf('UPDATE sucursal SET suc_nombre=%s, suc_direccion=%s, suc_ciudad=%s, suc_postal=%s, suc_telefono=%s  WHERE suc_id=%s',//***********
		GetSQLValueString($suc_nombre, 'text'),
		GetSQLValueString($suc_direccion, 'text'),
		GetSQLValueString($suc_ciudad, 'text'),
		GetSQLValueString($suc_postal, 'text'),		
		GetSQLValueString($suc_telefono, 'text'),
		GetSQLValueString($suc_id, 'int'));
		$query_1 = mysql_query($sql, $conexion_mysql) or die(mysql_error());
		
						
		//Si no hubo errores COMMIT caso contrario ROLLBACK
		if($query_1){
			mysql_query("COMMIT;", $conexion_mysql);
			$MSG = 'Actualizado exitosamente.';
			$MSGdes = '[ID: '.$suc_id.'] '.$suc_nombre;
			$MSGimg = $RUTAi.'ok.png';
		}else{
			mysql_query("ROLLBACK;", $conexion_mysql);
			$MSG = 'Error al actualizar.';
			$MSGdes = $error;
			$MSGimg = $RUTAi.'delete.png';
		}
		mysql_query("SET AUTOCOMMIT=1;", $conexion_mysql); //Habilita el autocommit
	
	}
	if($accion=='Insertar'){
		mysql_query("SET AUTOCOMMIT=0;", $conexion_mysql); //Desabilita el autocommit
		mysql_query("BEGIN;", $conexion_mysql); //Inicia la transaccion
		
		//Query 1
	  $sql = sprintf('INSERT INTO sucursal (suc_nombre, suc_direccion, suc_ciudad, suc_postal, suc_telefono, suc_eliminado) VALUES (%s,%s,%s,%s,%s,%s)',
		GetSQLValueString($suc_nombre, 'text'),
		GetSQLValueString($suc_direccion, 'text'),
		GetSQLValueString($suc_ciudad, 'text'),
		GetSQLValueString($suc_postal, 'text'),
		GetSQLValueString($suc_telefono, 'text'),
		GetSQLValueString('N', 'text')
		
		);
		
		$query_1 = mysql_query($sql, $conexion_mysql); $error=mysql_error();
		
		

		//Si no hubo errores COMMIT caso contrario ROLLBACK
		if($query_1){
			mysql_query("COMMIT;", $conexion_mysql);
			$MSG = 'Insertado exitosamente.';
			$MSGdes = '[ID: '.$suc_id.'] '.$suc_nombre;
			$MSGimg = $RUTAi.'ok.png';
		}else{
			mysql_query("ROLLBACK;", $conexion_mysql);
			$MSG = 'Error al insertar.';
			$MSGdes = $error;
			$MSGimg = $RUTAi.'delete.png';
		}
		mysql_query("SET AUTOCOMMIT=1;", $conexion_mysql); //Habilita el autocommit
	}
	
	if($accion=='Eliminar'){
		mysql_query("SET AUTOCOMMIT=0;", $conexion_mysql); //Desabilita el autocommit
		mysql_query("BEGIN;", $conexion_mysql); //Inicia la transaccion

		//Query 1
		$sql = sprintf('DELETE FROM sucursal WHERE suc_id=%s', GetSQLValueString($suc_id, 'int'));
		$query_1 = mysql_query($sql, $conexion_mysql);
		

		//Si no hubo errores COMMIT caso contrario ROLLBACK
		if($query_1){
			mysql_query("COMMIT;", $conexion_mysql);
			$MSG = 'Eliminado exitosamente.';
			$MSGdes = 'Registro eliminado';
			$MSGimg = $RUTAi.'ok.png';
		}else{
			mysql_query("ROLLBACK;", $conexion_mysql);
			$MSG = 'Error al eliminar.';
			$MSGdes = $error;
			$MSGimg = $RUTAi.'delete.png';
		}
		mysql_query("SET AUTOCOMMIT=1;", $conexion_mysql); //Habilita el autocommit
	}	
	$_SESSION['MSG'] = $MSG;
	$_SESSION['MSGdes'] = $MSGdes;
	$_SESSION['MSGimg'] = $MSGimg;
	header("Location: ".$RUTAm."administrador/sucursales-index.php");
?>