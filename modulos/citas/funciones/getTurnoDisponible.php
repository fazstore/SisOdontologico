<?php
	if (!isset($_SESSION)) session_start();
	include('../../../start.php');
	fnc_autentificacion();

    if(isset($_POST['fecha_sel'])) {
		$sql = sprintf("SELECT ID_TURNO, tur_hora FROM turno WHERE tur_eliminado != %s && ID_TURNO NOT IN (SELECT id_turno FROM reservar_cita WHERE rci_fecha_atencion = %s AND rci_eliminado != %s)",
		GetSQLValueString('S', "text"),
		GetSQLValueString($_POST['fecha_sel'], "text"),
		GetSQLValueString('S', "text"));
		$query = mysql_query($sql, $conexion_mysql) or die(mysql_error());
		
		$lista_turnos = array();
		while ($row = mysql_fetch_assoc($query)) {
			$turno = new turno($row['ID_TURNO'], $row['tur_hora']);
			array_push($lista_turnos, $turno);
		}
		echo json_encode($lista_turnos);
    }

    class turno {
        public $id;
        public $descripcion;

        function __construct($id, $descripcion) {
            $this->id = $id;
            $this->descripcion = $descripcion;
        }
    }
?>