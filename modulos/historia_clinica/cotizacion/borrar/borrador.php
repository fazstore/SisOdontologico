

<?php
$per_id=6;
$tra_rea_fec='2014-06-02';
include_once('../../../../start.php');

	$sql = sprintf("SELECT * FROM detalle_tratamientosxrealizar inner join tratamientos on detalle_tratamientosxrealizar.tra_id=tratamientos.tra_id inner join precios on tratamientos.tra_id=precios.tra_id WHERE per_id = '".$per_id."' and tra_rea_fec= '".$tra_rea_fec."'");
			$query = mysql_query($sql, $conexion_mysql) or die(mysql_error());
			$row = mysql_fetch_assoc($query);
			$tot_rows = mysql_num_rows($query); 
		if($tot_rows>0){
		 ?>
            	<table border="1">
                	<tr>
                    	<td style="width:100px;">Código</td>
                        <td style="width:350px;">Nombre </td>
                        <td style="width:100px;">Cantidad</td>
                        <td style="width:100px;">Total</td>
                    </tr>
                    
                     <?php do {
							  $totalTra=($row['det_tra_rea_cantidad']*$row['pre_val']); 
							   ?>
                    <tr>           
                    	<td><?php echo $row['tra_id']; ?></td>
                        <td><?php echo $row['tra_nom']; ?></td>
                        <td><?php echo $row['det_tra_rea_cantidad']; ?></td>
                        <td><?php echo $totalTra;?></td>
                   
					<?php } while ($row = mysql_fetch_assoc($query)) ?>
                     </tr>
                </table>
             <?php mysql_free_result($query);
              }else{ echo '<div ><h4>No existen tratamientos cotizados.</h4></div>'; }
            ?>
