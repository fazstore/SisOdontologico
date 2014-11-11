<?php
	if (!isset($_SESSION)) session_start();
	include('../../../start.php');
	fnc_autentificacion();
	$valor_pros_tot = fnc_varGetPost('valor_pros_tot');
	echo $valor_pros_tot;
	$Suma = $Suma + $valor_pros_tot;
	return($Suma);
?>
