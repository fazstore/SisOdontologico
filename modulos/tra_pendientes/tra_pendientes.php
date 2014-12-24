<?php
$sql = sprintf("SELECT * FROM detalle_tratamientosxrealizar inner join tratamientos on tratamientos.tra_id = detalle_tratamientosxrealizar.tra_id WHERE detalle_tratamientosxrealizar.tra_rea_eliminado= 'N' and detalle_tratamientosxrealizar.det_tra_rea_estado='F' ORDER BY tra_rea_fec DESC");
$query = mysql_query($sql, $conexion_mysql) or die(mysql_error());
$row = mysql_fetch_assoc($query);
$tot_rows = mysql_num_rows($query);


 if($tot_rows > 0)	{ ?>
    <div class="row-fluid">
        <table class="table table-bordered table-condensed table-striped" id="tab_usr" style="text-align:center">
            <thead>
            <tr>
                <th width="125px"></th>
                <th>Nombre del tratamiento</th>
                <th>Cantidad</th>
                <th>Fecha de Registro</th>
                <th>Estado del Tratamiento</th>
            </tr>
            </thead>
            <tbody >
            <?php do {
                 $estado = $row['det_tra_rea_estado'];
                if($estado=='F')
                {
                    $estado_tra= 'Tratamiento Pendiente';
                }
                if($estado=='C')
                {
                    $estado_tra= 'Tratamiento Cotizado';
                }
                if($estado=='R')
                {
                    $estado_tra= 'Tratamiento Realizado';
                }

                ?>
                <tr>
                    <td>
                        <div class="btn-group">
                            <a href="<?php echo $RUTAm; ?>tra_pendientes/funciones/fun_tra_estado.php?det_tra_rea_id=<?php echo $row['det_tra_rea_id']; ?>&per_id=<?php echo $per_id; ?>" class="btn btn btn-success btn-mini"><i class="icon-ok-circle"></i> Realizado</a>
                        </div>
                    </td>
                    <td><?php echo $row['tra_nom']; ?></td>
                    <td><?php echo $row['det_tra_rea_cantidad']; ?></td>
                    <td><?php echo $row['tra_rea_fec']; ?></td>
                    <td><?php echo $estado_tra; ?></td>
                </tr>
            <?php
            } while ($row = mysql_fetch_assoc($query));
            ?>
            </tbody>
        </table>
    </div>
    <?php mysql_free_result($query);
}else{ echo '<div class="alert "><h4>Buscar Tratamientos de Pacientes</h4></div>'; } ?>



