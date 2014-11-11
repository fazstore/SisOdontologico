<?php include_once('../../../start.php');
$tra_rea_fec=$_POST['tra_rea_fec'];
$per_id=$_POST['per_id'];

?>
<div style="padding:70px 0px 0px 50px; border:0px none #FFF; width:700px;">
<img style="text-align:right" src="http://odontoclinic.ec/images/odonto-logo-final.png" width="86" height="64"  alt=""/>
<label style="text-align:right;"><?php
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
?>
</label>
<h3 align="center" ><strong >Cotización de Tratamientos</strong></h3>
	<table border="0" cellpadding="0" cellspacing="0">
		<tr>
        	<td style="width:650px">
            	<table border="0" cellpadding="0" cellspacing="0">
                	<tr>
                    	<td style="width:450px; background:#00C"><div style="padding:5px 0px 5px 5px;">Paciente: <?php echo $tra_rea_fec;?></div></td>
                       <!--<td style="width:200px;background:#056"><div style="padding:5px 0px 5px 5px;">Cliente</div></td>--->
                    </tr>
                </table>
                <table border="0" cellpadding="0" cellspacing="0">
                    <tr>
                    	<td style="width:350px; background:#089"><div style="padding:5px 0px 5px 5px;">Dirección:</div></td>
                        <td style="width:300; background:#765"><div style="padding:5px 0px 5px 5px;">Teléfono:</div></td>
                    </tr>
                </table>
                <table border="0" cellpadding="0" cellspacing="0" style=" background:#089">
                    <tr>
                    	<td style="width:350px"></td>
                        <td style="width:300px; background:#380"><div style="padding:5px 0px 5px 5px;">celular:</div></td>
                    </tr>
                </table>
                <strong><h3>Detalle de Tratamientos a Realizar</h3></strong>
            </td>
        </tr>
        
        <tr>
        	
        	<td style="padding:40px 0px 0px 0px; height:200px; overflow:hidden;">
            <!-- DETALLE -->
            <?php
                   	
	$sqlCotiza = sprintf("SELECT * FROM detalle_tratamientosxrealizar inner join tratamientos on detalle_tratamientosxrealizar.tra_id=tratamientos.tra_id inner join precios on tratamientos.tra_id=precios.tra_id WHERE per_id = '".$per_id."' and tra_rea_fec='".$tra_rea_fec."'and det_tra_rea_estado='C'");
	$queryCotiza = mysql_query($sqlCotiza, $conexion_mysql) or die(mysql_error());
	$rowCotiza = mysql_fetch_assoc($queryCotiza);
	$tot_rowsCotiza = mysql_num_rows($queryCotiza);
     if($tot_rowsCotiza > 0)	{ ?>
            	<table border="1">
                	<tr>
                    	<td style="width:100px;">Código</td>
                        <td style="width:350px;">Nombre </td>
                        <td style="width:100px;">Cantidad</td>
                        <td style="width:100px;">Total</td>
                    </tr>
                   
                    <tr>
                     <?php do {
							  $totalTra=($rowCotiza['det_tra_rea_cantidad']*$rowCotiza['pre_val']); 
							   ?>
                    	<td><?php echo $rowCotiza['tra_id']; ?></td>
                        <td><?php echo $rowCotiza['tra_nom']; ?></td>
                        <td><?php echo $rowCotiza['det_tra_rea_cantidad']; ?></td>
                        <td><?php echo $totalTra;?></td>
                    </tr>
                    <?php } while ($rowCotiza = mysql_fetch_assoc($queryCotiza)); ?>
                </table>
             <?php mysql_free_result($queryCotiza);
              }else{ echo '<div class="alert alert-error"><h4>No existen tratamientos cotizados.</h4></div>'; } ?>
            <!-- FIN DETALLE -->    
            </td>
        </tr>
        <tr>
        	<td>
            	<table style="" border="0">
                	<tr>
                    	<td style="width:550px;"></td>
                        <td style="width:100px;"><div style="padding:5px 0px 5px 5px;">Subtotal</div></td>
                    </tr>
                    <tr>
                    	<td style="width:550px;"></td>
                        <td style="width:100px;"><div style="padding:5px 0px 5px 5px;">Descuento</div></td>
                    </tr>
                    <tr>
                    	<td style="width:550px;"></td>
                        <td style="width:100px;"><div style="padding:5px 0px 5px 5px;">IVA</div></td>
                    </tr>
                    <tr>
                    	<td style="width:550px;"></td>
                        <td style="width:100px;"><div style="padding:5px 0px 5px 5px;">Total</div></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <br>
<div style="padding:70px 0px 0px 50px; border:0px none #FFF; width:700px;">
   	Vargas Machuca 4-03 y Alfonso Jerves<br>
	<label>Cel:</label> (+593) 0999-933-190<br>
    <label title="Teléfono">Telf:</label> 2843854 - 4088269<br>
    <a href="mailto:#">nombre@hotmail.com</a>
  	<strong>CUENCA,AZUAY - ECUADOR</strong>

</div>
</div>
