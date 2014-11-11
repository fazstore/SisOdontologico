<?php 
	if (!isset($_SESSION)) session_start();
	include('../../../start.php');
	fnc_autentificacion();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8"></meta>
	<title>Crear paciente</title>
    <?php include(RUTAp.'jquery/styl-jquery.php'); ?>
    <?php require_once(RUTAs.'styles/styl-bootstrap.php'); ?>    
    
</head>
<body>
	<?php include(RUTAcom.'menu-principal.php');?>
    <div class="row-fluid">
    	<div class="span10" id="calendar" name="calendar" ></div>

        <input type="hidden" id="Url" value="<?php echo $RUTAm."citas/Agenda/funciones.php"; ?>">
    </div>
</body>
<footer>	
</footer>
</html>


<script type="text/javascript">
/*$(document).ready(function() {
    var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		var url = $("#Url").val();
		
		$('#calendar').fullCalendar({
			theme: true,
			draggable: true,
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			editable: true,
			events: {
			url: 'funciones.php',
			type: 'POST',
			error: function() {
				alert('There was an error while fetching events.'); // Error alert
			}
},

	});

});*/
  $(document).ready(function() {

        $('#calendar ').fullCalendar({
        });

    });

 </script>
