<?php
	include ('../../../start.php');
	fnc_autentificacion();
	
	$pac_id = fnc_varGetPost('pac_id');
	$per_id = fnc_varGetPost('per_id');
	$accion = 'Insertar';
	$nombre = $_POST["nom"];
    $cedula = $_POST["doc"];
	$nacionalidad = "Sin Definir";
    $ciudad = "Sin Definir";
	$direccion1 = $_POST["dir"];
    $direccion2 = "Sin Definir";
	$num_vivienda = "Sin Definir";
    $telefono = $_POST["tel"];
	$celular = "Sin Definir";
    $email = $_POST["email"];
    $sexo = "Sin Definir";
	$fecha_nacimiento = "0000-00-00";
	$observaciones = "Sin Definir";
    $alergia = "Sin Definir";
	
	
		
		if($accion == "Insertar")
		{
			mysql_query("SET AUTOCOMMIT=0;", $conexion_mysql); //Desabilita el autocommit
			mysql_query("BEGIN;", $conexion_mysql); //Inicia la transaccion
			
			$carpeta = RUTAi."personas/";
			opendir($carpeta);
			$desino = $carpeta.$_FILES['foto']['name'];
			copy($_FILES['foto']['tmp_name'],$desino);
			$nom_foto = $_FILES['foto']['name'];
			$ruta = $carpeta.$nom_foto.$extension;
			
			$queryper=sprintf("SELECT per_id FROM persona WHERE per_documento = %s",
			GetSQLValueString($cedula, "text"));    
			$RSper = mysql_query($queryper, $conexion_mysql) or die(mysql_error());
			$row_RS_datos_per = mysql_fetch_assoc($RSper);		
			$PerIdRS = $row_RS_datos_per["per_id"];
			
			if(!isset($row_RS_datos_per["per_id"]))
			{
				$query_insert_user1 = sprintf("INSERT INTO persona (per_nombre, per_documento, per_nacionalidad, per_ciudad_nac, per_direccion1, per_direccion2, per_num_viv, per_mail, per_sexo, per_fec_nac, per_foto) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
						   GetSQLValueString($nombre, "text"),
						   GetSQLValueString($cedula, "text"),
						   GetSQLValueString($nacionalidad, "text"),
						   GetSQLValueString($ciudad, "text"),
						   GetSQLValueString($direccion1, "text"),
						   GetSQLValueString($direccion2, "text"),
						   GetSQLValueString($num_vivienda, "text"),
						   GetSQLValueString($email, "text"),
						   GetSQLValueString($sexo, "text"),
						   GetSQLValueString($fecha_nacimiento, "text"),
						   GetSQLValueString($ruta, "text"));
			
			$query_1 = mysql_query($query_insert_user1, $conexion_mysql); $error=mysql_error();

			$per_id = mysql_insert_id();
		}
		else
		{
			$per_id = $row_RS_datos_per["per_id"];
		}
		
		$querycel=sprintf("SELECT tel_id FROM telefono WHERE per_id = %s AND tel_tipo = %s",
		GetSQLValueString($per_id, "int"),
		GetSQLValueString('celular', "text"));    
		$RScel = mysql_query($querycel, $conexion_mysql) or die(mysql_error());
		$row_RS_datos_cel = mysql_fetch_assoc($RScel);		
		if(!isset($row_RS_datos_cel["tel_id"]))
		{
			$query_insert_user = sprintf("INSERT INTO telefono (per_id, tel_tipo, tel_numero, tel_eliminado) VALUES (%s, %s, %s, %s)",
						   GetSQLValueString($per_id, "text"),
						   GetSQLValueString("celular", "text"),
						   GetSQLValueString($celular, "text"),
						   GetSQLValueString("N", "text"));
						   
			$query_2 = mysql_query($query_insert_user, $conexion_mysql); $error=mysql_error();
		}
		$querycel=sprintf("SELECT tel_id FROM telefono WHERE per_id = %s AND tel_tipo = %s",
		GetSQLValueString($per_id, "int"),
		GetSQLValueString('convencional', "text"));    
		$RScel = mysql_query($querycel, $conexion_mysql) or die(mysql_error());
		$row_RS_datos_cel = mysql_fetch_assoc($RScel);		
		if(!isset($row_RS_datos_cel["tel_id"]))
		{
			$query_insert_user = sprintf("INSERT INTO telefono (per_id, tel_tipo, tel_numero, tel_eliminado) VALUES (%s, %s, %s, %s)",
						   GetSQLValueString($per_id, "text"),
						   GetSQLValueString("convencional", "text"),
						   GetSQLValueString($telefono, "text"),
						   GetSQLValueString("N", "text"));
			
			$query_3 = mysql_query($query_insert_user, $conexion_mysql); $error=mysql_error();
		}
		$querypac=sprintf("SELECT pac_id FROM paciente WHERE per_id = %s AND pac_eliminado = %s",
		GetSQLValueString($per_id, "int"),
		GetSQLValueString('N', "text"));    
		$RSpac = mysql_query($querypac, $conexion_mysql) or die(mysql_error());
		$row_RS_datos_pac = mysql_fetch_assoc($RSpac);		
		/*
		if(!isset($row_RS_datos_pac["pac_id"]))
		{
			$query_insert_user = sprintf("INSERT INTO paciente (per_id, pac_observaciones, pac_alergias, pac_eliminado) VALUES (%s, %s, %s, %s)",
						   GetSQLValueString($per_id, "text"),
						   GetSQLValueString($observaciones, "text"),
						   GetSQLValueString($alergia, "text"),
						   GetSQLValueString("N", "text"));
			
			$query_4 = mysql_query($query_insert_user, $conexion_mysql); $error=mysql_error();
		}*/
		//Si no hubo errores COMMIT caso contrario ROLLBACK
		if($query_1 || $query_2 || $query_3){
			mysql_query("COMMIT;", $conexion_mysql);
			$MSG = 'Insertado';
		}else{
			mysql_query("ROLLBACK;", $conexion_mysql);
			$MSG = 'Error al insertar.';
			}
		mysql_query("SET AUTOCOMMIT=1;", $conexion_mysql); //Habilita el autocommit
		}
		echo $MSG ;




?>