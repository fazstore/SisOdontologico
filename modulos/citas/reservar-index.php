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
		<div class="page-header"><h3>RESERVAR CITA</h3></div>
		<div class="portlet-body">
        	<div class="row-fluid">
                <button type="button" class="btn btn-success btn-large" data-toggle="modal" data-target="#myModal">RESERVAR CITA</button>

				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
                        	<form class="form-horizontal">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Reservar cita</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="span12 well well-sm">
                                        <div class="row-fluid">
                                            <div class="span6">
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Fecha:</label>
                                                    <div class="col-sm-8">
                                                        <input type="date" id="fecha" name="fecha" required autofocus />
                                                    </div>
                                                </div>
                                                <br />
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Turno:</label>
                                                    <div class="col-sm-8">
                                                        <select id="turno" name="turno">
                                                            <option value="0" disabled>Seleccione la hora</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span6">
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Paciente:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" id="paciente" name="paciente" placeholder="Nombre del paciente" required>
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
                                                        <textarea class="form-control input-block-level" id="observaciones" name="observaciones" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <button class="btn btn-primary" type="button" id="btn_reservar_cita">Reservar cita</button>
                                </div>
							</form>
						</div>
					</div>
				</div>
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
		
		calendario_reservas();
 	});

	function calendario_reservas() {
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
	
		var calendar = $('#calendar_reservar').fullCalendar({
			editable: true,
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
	   
			events: "funciones/getReservas.php",
	   
			// Convert the allDay from string to boolean
			eventRender: function(event, element, view) {
				if (event.allDay === 'true') {
					event.allDay = true;
				} else {
					event.allDay = false;
				}
			},
			selectable: true,
			selectHelper: true,
			
			select: function(event, start, end, allDay) {
				var title = prompt('Event Title:');
				var url = prompt('Type Event url, if exits:');
				if (title) {
					//var start = $.fullCalendar.formatDate(start, "yyyy-MM-dd HH:mm:ss");
					var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
					//var end = $.fullCalendar.formatDate(end, "yyyy-MM-dd HH:mm:ss");
					var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
					$.ajax({
						url: 'funciones/add_events.php',
						data: 'title='+ title+'&start='+ start +'&end='+ end +'&url='+ url ,
						type: "POST",
						success: function(json) {
							alert('Added Successfully');
						}
					});
					calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: start,
							end: end,
							allDay: allDay
						},
						true // make the event "stick"
					);
				}
				calendar.fullCalendar('unselect');
			},
		   
			editable: true,
			eventDrop: function(event, delta) {
				var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
				var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
				$.ajax({
					url: 'funciones/update_events.php',
					data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
					type: "POST",
					success: function(json) {
						alert("Updated Successfully");
					}
				});
			},
			eventResize: function(event) {
				var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
				var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
				$.ajax({
					url: 'funciones/update_events.php',
					data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
					type: "POST",
					success: function(json) {
						alert("Updated Successfully");
					}
				});
			}	   
		});
	}

	$("#fecha").change(function() { // Realiza consulta de disponibilidad de turnos
		var fecha_sel = $("#fecha").val();
		            
		var data = { fecha_sel : $(this).val() };
		$.post("funciones/getTurnoDisponible.php", data, function(turnos) { // Carga la informacion en el select
			$("#turno").empty();
			$("#turno").append("<option value='0' selected disabled>Seleccione la hora</option>");
			$.each(turnos, function(index, turno) {
				$("#turno").append("<option value=" + turno.id + ">" + turno.descripcion + "</option>");
			});
			$("#turno").trigger("chosen:updated");
		},
		'json');
	});

	$("#btn_reservar_cita").click(function() {
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
										url: 'funciones/saveReservarCita.php',
										data: {
											fecha:$("#fecha").val(),
											id_turno:$("#turno").val(),
											paciente:$("#paciente").val(),
											id_trat:$("#tratamiento").val(),
											observaciones:$("#observaciones").val()
										},
										success: function(data) {
											if (data.state == true) {
												msgGritter("Reservar cita",data.message,"../../images/ok.png");
												$("#fecha").val("");
												$("#turno").empty().trigger("chosen:updated");
												$("#turno").append("<option value='0' selected disabled>Seleccione la hora</option>");
												$("#turno").val(0).trigger("chosen:updated");
												$("#paciente").val("");
												$("#tratamiento").val(0).trigger("chosen:updated");
												$("#observaciones").val("");
												$('#calendar_reservar').refresh();
											} else if (data.state == false) {
												msgGritter("Reservar cita",data.message,"../../images/delete.png");
											} else {
												msgGritter("Reservar cita","SE PRODUJO UN ERROR DESCONOCIDO","../../images/delete.png");
											}
										},
										error: function(data) {
											msgGritter("ERROR","NO SE PUDO REALIZAR LA CONSULTA","../../images/delete.png");
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