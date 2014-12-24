<?php 
	include('../../../start.php');
	fnc_autentificacion();
	$per_id = fnc_varGetPost('per_id');
	$ModelodePago = $_POST['ModelodePago'];
	$AplicaDescuento = $_POST['Descuento'];
	$id_fac = $_POST['id_fac'];
	$per_id = $_POST['per_id'];
	$tdescuento = $_POST['tdescuento'];
	$total = $_POST['total'];
	
	
	
	if($AplicaDescuento =='N')
	{$tdescuento=0;
	
		}
	$tot_fac=$total-$tdescuento;
	$sql = sprintf('Insert into cabecera_factura (cab_fac_val_pag, cab_fac_des, cab_fac_subt, cab_fac_iva, cab_fac_tot, cab_fac_num, per_id, cab_fac_eliminado) values (%s,%s,%s,%s,%s,%s,%s,%s)',
		GetSQLValueString($tot_fac, 'text'),
		GetSQLValueString($tdescuento, 'text'),
		GetSQLValueString($total, 'text'),
		GetSQLValueString('0', 'int'),
		GetSQLValueString($tot_fac, 'text'),
		GetSQLValueString($id_fac, 'text'),
		GetSQLValueString($per_id, 'int'),
		GetSQLValueString('N', 'text'));
		$query_1 = mysql_query($sql, $conexion_mysql) or die(mysql_error());
		$id_insert_cab_fac=mysql_insert_id();

		$sqltratamientosxrealizar = sprintf("SELECT * FROM detalle_tratamientosxrealizar where per_id=".$per_id." and tra_rea_fec='" .date('Y-m-d')."' and det_tra_rea_estado = 'C'");
		$querytratamientosxrealizar = mysql_query($sqltratamientosxrealizar, $conexion_mysql) or die(mysql_error());
		$rowtratamientosxrealizar = mysql_fetch_assoc($querytratamientosxrealizar);
		do {
			$totalTra=($rowtratamientosxrealizar['det_tra_rea_cantidad']*$rowtratamientosxrealizar['pre_val']);
			$totalTra2=$totalTra2+$totalTra; 
			if($AplicaDescuento =='N')
			{$descuento_estado=0;
			}else {
			$descuento_estado = (fnc_datGeneral($rowtratamientosxrealizar['tra_id'],'pre_des','precios')*$rowtratamientosxrealizar['det_tra_rea_cantidad']);
			}

			$precios = fnc_datGeneral($rowtratamientosxrealizar['tra_id'],'tra_id','precios');
			$sql2 = sprintf('INSERT INTO detalle_factura (cab_fac_id, tra_id, det_tra_val, det_tra_des, det_tra_can, det_fac_eliminado) VALUES (%s,%s,%s,%s,%s,%s)',
		GetSQLValueString($id_fac, 'text'),
		GetSQLValueString($rowtratamientosxrealizar['tra_id'], 'text'),
		GetSQLValueString($precios['pre_val'], 'text'),
		GetSQLValueString($descuento_estado, 'text'),
		GetSQLValueString($rowtratamientosxrealizar['det_tra_rea_cantidad'], 'text'),
		GetSQLValueString('N', 'text'));
		$query_2 = mysql_query($sql2, $conexion_mysql) or die(mysql_error());
		$id_insert_det_fac=mysql_insert_id();

		} while ($rowtratamientosxrealizar = mysql_fetch_assoc($querytratamientosxrealizar)); 
		
		
		$sqlup_tra = sprintf("UPDATE detalle_tratamientosxrealizar SET det_tra_rea_estado = 'F' WHERE tra_rea_fec='" .date('Y-m-d')."' and det_tra_rea_estado = 'C'");
		$queryup_tra= mysql_query($sqlup_tra, $conexion_mysql) or die(mysql_error());
		mysql_query("COMMIT;", $conexion_mysql);


		//Si no hubo errores COMMIT caso contrario ROLLBACK
		if($query_1 || $query_2 || $queryup_tra){
			mysql_query("COMMIT;", $conexion_mysql);
			$MSG = 'Factura registrada Correctamente.';
		}else{
			mysql_query("ROLLBACK;", $conexion_mysql);
			$MSG = 'Error al Facturar.';
		}
		mysql_query("SET AUTOCOMMIT=1;", $conexion_mysql); //Habilita el autocommit

	echo $MSG;

	
?>