<?php
	if (!isset($_SESSIOxN)) session_start();
	include('../../../start.php');
	fnc_autentificacion();
	ob_start();
	$per_id=$_GET['id'];
	$tra_rea_fec=date('Y-m-d');
	$sql = sprintf("SELECT * FROM persona inner join empleado on empleado.per_id=persona.per_id");
	$query = mysql_query($sql, $conexion_mysql) or die(mysql_error());
	$row = mysql_fetch_assoc($query);
	$tot_rows = mysql_num_rows($query);
	
?>
<page>
<div style="padding:70px 0px 0px 50px; border:0px none #FFF; width:700px;">
<img src="<?php echo RUTAi."odonto-logo-final.png";?>" width="176" height="144"  alt=""/> 
<label  style="font-size:18px;"><?php
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
?>
</label>
<h2>Reporte de Empleados</h2>
            <?php if($tot_rows > 0)	{ ?>
            <div class="row-fluid">
			<table border="1">
				<thead>
					<tr >
						<th >CI/RUC</th>
						<th>Nombre</th>
						<th>Email</th>
                        <th>Teléfono</th>										
					</tr>
				</thead>
				<tbody>
					<?php do { 
					// Consuta 1 para buscar los telefonos del paciente.
					$sqlt = sprintf("SELECT * FROM telefono WHERE telefono.per_id = '".$row["per_id"]."' AND tel_eliminado='N'");
					$queryT = mysql_query($sqlt, $conexion_mysql) or die(mysql_error());
					$rowT = mysql_fetch_assoc($queryT);
					$tot_rowsT = mysql_num_rows($queryT);
					?>
					<tr>
						<td><?php echo $row['per_documento']; ?></td>
						<td><?php echo $row['per_nombre']; ?></td>
						<td><?php echo $row['per_mail']; ?></td>
                        <td>
                        <?php if($tot_rowsT > 0)	{ ?>
                            <div class="row-fluid">
                            <table class="table table-bordered table-condensed table-striped" id="tab_usr">
                                <thead>
                                    <tr>
                                        <th width="90px">Tipo</th>
                                        <th style="text-align:center">Número</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php do { ?>
                                    <tr>
                                        <td><?php echo $rowT['tel_tipo']; ?></td>
                                        <td style="text-align:center"><?php echo $rowT['tel_numero']; ?></td>
                                    </tr>
                                    <?php 
                                    } while ($rowT = mysql_fetch_assoc($queryT)); 
                                    ?>
                                </tbody>
                            </table>
                            </div>        			
                            <?php mysql_free_result($queryT);
                            }else{ echo '<div class="alert "><h4>No tiene teléfonos</h4></div>'; } ?>
                        </td>
						
					</tr>
					<?php } while ($row = mysql_fetch_assoc($query)); ?>
				</tbody>
			</table>
            </div>        			
			<?php mysql_free_result($query);
			}else{ echo '<div class="alert alert-error"><h4>No existen pacientes registrados en el sistema.</h4></div>'; } ?>
</div>
</page>
<?php 
$content = ob_get_clean();
require_once(RUTAs.'funciones/html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','fr','UTF-8');
$pdf->writeHTML($content);
$pdf->pdf->IncludeJS('print(TRUE)');
$pdf->Output('reporte.pdf'); 
?>

