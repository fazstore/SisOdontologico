<?php
	include ('../../../start.php');
	fnc_autentificacion();

$sql = sprintf("SELECT * FROM paciente");
$rs = mysql_query($sql, $conexion_mysql) or die(mysql_error());
$arr = array();

while($row = mysql_fetch_assoc($rs)){
	//$arr[] = $row; 
	$arr['id'] = $row['pac_id'];
}  
echo json_encode($arr);
?>

