<?php 
	if (!isset($_SESSION)) session_start();
	include("../../start.php");
	fnc_autentificacion();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Anular factura</title>
    <?php include(RUTAp.'jquery/styl-jquery.php'); ?>
    <?php include(RUTAs.'styles/styl-bootstrap.php'); ?>
</head>
<body>
<div class="container"><a href="cotizacion/cotizacion_print.php?idf=1" class="btn btn-primary fancybox fancybox.iframe">Hola</a></div>
</body>
</html>