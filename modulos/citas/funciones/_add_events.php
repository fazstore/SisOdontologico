<?php
/*// Values received via ajax
$id_tratamiento = $_POST['id_tra'];
$id_turno = $_POST['id_tur'];
$fecha_atencion = $_POST['fec_aten'];
$nombre_paciente = $_POST['nom_pac'];
$observaciones = $_POST['obs'];
// connection to the database
try {
$bdd = new PDO('mysql:host=localhost;dbname=sistema_odontologico', 'root', 'root');
} catch(Exception $e) {
exit('Unable to connect to database.');
}

// insert the records
$sql = "INSERT INTO reservar_cita (tra_id, id_turno, rci_fecha_atencion, rci_nombre_paciente, rci_observaciones) VALUES (:id_tratamiento, :id_turno, :fecha_atencion, :nombre_paciente, :observaciones)";
$q = $bdd->prepare($sql);
$q->execute(array(':id_tratamiento'=>$id_tratamiento, ':id_turno'=>$id_turno, ':fecha_atencion'=>$fecha_atencion,  ':nombre_paciente'=>$nombre_paciente, ':observaciones'=>$observaciones));*/


// Values received via ajax
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];
$url = $_POST['url'];
// connection to the database
try {
$bdd = new PDO('mysql:host=localhost;dbname=fullcalendar', 'root', 'root');
} catch(Exception $e) {
exit('Unable to connect to database.');
}

// insert the records
$sql = "INSERT INTO evenement (title, start, end, url) VALUES (:title, :start, :end, :url)";
$q = $bdd->prepare($sql);
$q->execute(array(':title'=>$title, ':start'=>$start, ':end'=>$end,  ':url'=>$url));
?>