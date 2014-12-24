<?php 
	if (!isset($_SESSION)) session_start();
	include("../../start.php");
	fnc_autentificacion();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Reservar cita</title>
    <?php include(RUTAp.'jquery/styl-jquery.php'); ?>
    <?php include(RUTAs.'styles/styl-bootstrap.php'); ?>
</head>    
<body>	
	<?php include(RUTAcom.'menu-principal.php'); ?>
    <div class="container">
		<div class="page-header"><h3>CONFIRMAR CITA</h3></div>
		<div class="portlet-body">
        	<div class="row-fluid">
                <form class="form-horizontal">
                    <div class="span12 well well-sm">
                    	<div class="row-fluid">
                            <div class="span6">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Fecha:</label>
                                    <div class="col-sm-8">
                                        <input type="date" id="fecha" required autofocus />
                                    </div>
                                </div>
                                <br />
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Turno:</label>
                                    <div class="col-sm-8">
                                        <?php fnc_genSelect(fnc_getHorarios(),'','turno','required'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="span6">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Paciente:</label>
                                    <div class="col-sm-8">
                                        <input type="text" id="paciente" placeholder="Buscar por nombre o documento" required>
                                    </div>
                                </div>
                                <br />
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Tratamiento:</label>
                                    <div class="col-sm-8">
                                        <?php fnc_genSelect(fnc_datosTratamientos(),'','tratamiento','required'); ?>
                                    </div>
                                </div>
                            </div>
						</div>
                        <div class="row-fluid">
                            <div class="span12">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Observaciones:</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control input-block-level" rows="3"></textarea>
                                    </div>
                                </div>
							</div>
                        </div>
                        <br />
                        <div class="form-group pull-right">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button class="btn btn-large btn-success" type="button" id="btn_reservar_cita">RESERVAR CITA</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <br />
            <div class="row-fluid">
                <div class="span12 well well-sm">
                    <div id="calendar_reservar"></div>    
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
	</div>
</body>
</html>
<script type="text/javascript">
	$(document).on('ready', function(){
		$("#turno").chosen();
		$("#tratamiento").chosen();
		
		$('#calendar_reservar').fullCalendar({		
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: '2014-11-12',
			businessHours: true, // display business hours
			editable: true,
			events: [
				{
					title: 'Business Lunch',
					start: '2014-11-03T13:00:00',
					constraint: 'businessHours'
				},
				{
					title: 'Meeting',
					start: '2014-11-13T11:00:00',
					constraint: 'availableForMeeting', // defined below
					color: '#257e4a'
				},
				{
					title: 'Conference',
					start: '2014-11-18',
					end: '2014-11-20'
				},
				{
					title: 'Party',
					start: '2014-11-29T20:00:00'
				},
				// areas where "Meeting" must be dropped
				{
					id: 'availableForMeeting',
					start: '2014-11-11T10:00:00',
					end: '2014-11-11T16:00:00',
					rendering: 'background'
				},
				{
					id: 'availableForMeeting',
					start: '2014-11-13T10:00:00',
					end: '2014-11-13T16:00:00',
					rendering: 'background'
				},
				// red areas where no events can be dropped
				{
					start: '2014-11-24',
					end: '2014-11-28',
					overlap: false,
					rendering: 'background',
					color: '#ff9f89'
				},
				{
					start: '2014-11-06',
					end: '2014-11-08',
					overlap: false,
					rendering: 'background',
					color: '#ff9f89'
				}
			]
		});
	});

	$("#fecha").change(function() { // Realiza consulta de disponibilidad de turnos
		
	});

	$( "#btn_reservar_cita" ).click(function() {
		if($("#fecha").val() != "") {
			if($("#turno").val() > 0) {
				if($("#paciente").val() != "") {
					if($("#tratamiento").val() > 0) {
						vex.dialog.open({
							message: '¿Esta seguro que desea reservar esta cita?',
							title: 'Confirmar',
							overlayClosesOnClick: false,
							buttons: [
									$.extend({}, vex.dialog.buttons.YES, {
										text: 'Aceptar'
									}), $.extend({}, vex.dialog.buttons.NO, {
										text: 'Cancelar'
									})
								],
							callback: function (data) {
								if (data === false) {
									return console.log('Cancelled');
								}
								else {
									$.ajax({
										type: 'POST',
										dataType: 'json',
										url: 'funciones/reservarCita.php',
										data: { 
											fecha:$("#fecha").val(),
											id_turno:$("#turno").val(),
											paciente:$("#paciente").val(),
											id_trat:$("#tratamiento").val(),
											observaciones:$("#observaciones").val()
										},				
										success: function(data) { 
											
										},
										error: function(data) {
											vex.dialog.alert('NO SE PUDO REALIZAR LA CONSULTA');
										}
									});
								}
							}
						});
					} else {
						msgGritter("Advertencia","Por favor ingrese un tratamiento.","../../images/warning.png");
					}
				} else {
					$("#paciente").focus();
					msgGritter("Advertencia","Por favor ingrese un paciente.","../../images/warning.png");
				}
			} else {
				msgGritter("Advertencia","Por favor ingrese la hora.","../../images/warning.png");
			}
		} else {
			$("#fecha").focus();
			msgGritter("Advertencia","Por favor ingrese la fecha.","../../images/warning.png");
		}
		
		
		
	});
</script>