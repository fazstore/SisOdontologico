<?php
	if (!isset($_SESSIOxN)) session_start();
	include('../../start.php');
	fnc_autentificacion();
	ob_start();
	$fac_id=$_GET['id'];
	$tra_rea_fec=date('Y-m-d');
	$sql = sprintf("SELECT * FROM cabecera_factura inner join persona on cabecera_factura.per_id = persona.per_id where cab_fac_id= '".$fac_id."'");
	$query = mysql_query($sql, $conexion_mysql) or die(mysql_error());
	$row = mysql_fetch_assoc($query);
	$tot_rows = mysql_num_rows($query);

    $per_id = $row['per_id'];
    $sqlper = sprintf("SELECT * FROM persona inner join telefono on persona.per_id= telefono.per_id
    WHERE persona.per_id ='".$per_id."' and tel_tipo ='Convencional'");
    $queryper = mysql_query($sqlper, $conexion_mysql) or die(mysql_error());
    $rowper = mysql_fetch_assoc($queryper);


?>
<page>
            <!-- INICIO -->
<div style="padding:140px 20px -900px 30px; border:0px none #FFF; width:900px;">
	<table border="0" cellpadding="0" cellspacing="0">
		<tr>
        	<td style="width:650px">
 				<table border="0" cellpadding="0" cellspacing="0">
                	<tr>
                    	<td style="width:60px"> </td>
                    	<td style="width:370px"><div style="padding:0px 0px 0px 0px;"> <?php echo "        ".$row['per_nombre']; ?></div></td>
                        <td style="width:80px"> </td>
                        <td style="width:180px"><div style="padding:0px 0px 0px 0px;"> <?php echo $row['cab_fac_fech']; ?></div></td>
                    </tr>
                </table>
                <table border="0" cellpadding="0" cellspacing="0">
                    <tr><td style="width:60px"> </td>
                    	<td style="width:250px; "><div style="padding:5px 0px 0px 0px;"><?php echo $row['per_documento']; ?></div></td>
                        <td style="width:70px"> </td>
                        <td style="width:310; "><div style="padding:5px 0px 10px 0px;" ><?php echo $row['per_direccion1'].'  '.$row['per_num_viv']; ?></div></td>
                    </tr>
                </table>
                <table border="0" cellpadding="0" cellspacing="0">
                    <tr>
                    	<td style="width:540px"></td>
                        <td style="width:150px; "><div  ><?php echo $rowper['tel_numero']; ?></div></td>
                    </tr>
                </table>
            </td>
        </tr>
     </table>
                            <!--- INICIO DETALLE --->


    <?php

    $sql2 = sprintf("SELECT * FROM Detalle_factura inner join tratamientos on tratamientos.tra_id = Detalle_factura.tra_id  where Detalle_factura.cab_fac_id = '".$fac_id."'");
    $query2 = mysql_query($sql2, $conexion_mysql) or die(mysql_error());
    $row2 = mysql_fetch_assoc($query2);
    $tot_rows2 = mysql_num_rows($query2);

    if($tot_rows2 > 0){ ?>
   <table class="table table-bordered table-condensed table-striped" id="tab_usr" >
   <thead>
        <tr>
              <td style="width:110px;  text-align: center" ><div style="padding:30px 0px 0px 0px;"></div></td>
              <td style="width:370px;  text-align: center"></td>
              <td style="width:100px;  text-align: center"></td>
              <td style="width:100px;  text-align: center"></td>
        </tr>
   </thead>
   <tbody>
   <?php do{ ?>
        <tr>
            <th style="text-align: center"><?php echo $row2['det_tra_can'] ?></th>
            <th><?php echo $row2['tra_nom'] ?></th>
            <th style="text-align: center"><?php echo $row2['det_tra_val'] ?></th>
            <th style="text-align: center"><?php echo ($row2['det_tra_val']*$row2['det_tra_can']) ?></th>
        </tr>
        <?php }
        while ($row2 = mysql_fetch_assoc($query2)); ?>
   </tbody>
</table>
</div>
<table style="position: absolute; margin-top: 450px">

    <tr>
        <td>

            <table style="font-size:12px; " border="0">
                <tr>
                    <td style="width:550px;"></td>
                    <td style="width:60px; text-align: right"></td>
                    <td style="width:60px; text-align: center; "><?php echo $row['cab_fac_subt']; ?></td>
                </tr>
                <tr>
                    <td style="width:470px;"></td>
                    <td style="width:60px; text-align: right"> </td>
                    <td style="width:60px; text-align: center; "><?php echo $row['cab_fac_des']; ?><div style="padding:0px 0px 15px 0px;" ></div></td>
                </tr>
                <tr>
                    <td style="width:470px;"></td>
                    <td style="width:60px; text-align: right"> </td>
                    <td style="width:60px; text-align: center; "><?php echo $row['cab_fac_iva']; ?><div style="padding:0px 0px 20px 0px;" ></div></td>
                </tr>
                <tr>
                    <td style="width:470px;"></td>
                    <td style="width:60px; text-align: right"> </td>
                    <td style="width:60px; font-size:16px; text-align: center; "><?php echo $row['cab_fac_tot']; ?><div style="padding:25px 30px 0px 0px;" ></div> </td>
                </tr>
            </table>
        </td>
    </tr>

</table>

<?php mysql_free_result($query2);
}else{ echo '<div class="alert alert-error"><h4>No existe detalle en la factura **** ERROR EN LA FACTURA ****</h4></div>'; } ?>


                <!--- FIN DETALLE --->






</page>
<?php
$content = ob_get_clean();
require_once(RUTAs.'funciones/html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('L','A5','fr','UTF-8');
$pdf->writeHTML($content);
$pdf->pdf->IncludeJS('print(TRUE)');
$pdf->Output('Factura.pdf');
?>

