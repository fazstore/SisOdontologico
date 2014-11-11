<?php 
	if (!isset($_SESSION)) session_start();
	include('../../start.php');
	fnc_autentificacion();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8"></meta>
	<title>Gestión de Categorías</title>
    <?php include(RUTAp.'jquery/styl-jquery.php'); ?>
    <?php require_once(RUTAs.'styles/styl-bootstrap.php'); ?>
</head>
<body>
	<?php include(RUTAcom.'menu-principal.php');
	$sql = sprintf("SELECT * FROM tra_categorias WHERE tra_cat_elim = 'N' ORDER BY tra_cat_id DESC");
	$query = mysql_query($sql, $conexion_mysql) or die(mysql_error());
	$row = mysql_fetch_assoc($query);
	$tot_rows = mysql_num_rows($query); 
	
	fnc_msgGritter();?>
    
	<div class="container">
		<div class="page-header"><h3>ADMINISTRACIÓN DE CATEGORÍAS</h3></div>
        <div class="row-fluid">
        	<div class="span8">
                <ul class="breadcrumb">
                    <li class="active"><i class="icon-home"></i> Administración de Categorías</li>
                </ul>
			</div>
            <div class="span4">
            	<a href="<?php echo $RUTAm; ?>administrador/categorias_tratamientos-form.php" class="btn btn-primary btn-large btn-block"><strong> NUEVA CATEGORÍA</strong></a>
            </div>
		</div>
		<div class="portlet-body">
			<div class="row-fluid">
				<div class="alert alert-info">
					<h4><i class="icon-list"></i> Lista de categorías <span class="badge"><?php echo $tot_rows; ?></span></h4>
				</div>
			</div>
            <?php if($tot_rows > 0)	{ ?>
            <div class="row-fluid">
			<table class="table table-bordered table-condensed table-striped" id="tab_tra">
				<thead>
					<tr>
						<th width="125px"></th>
						<th>Id</th>
                        <th>Categoría</th>
					</tr>
				</thead>
				<tbody>
					<?php do { ?>
					<tr>
						<td>
							<div class="btn-group">
                        		<a href="<?php echo $RUTAm; ?>administrador/categorias_tratamientos-form.php?tra_cat_id=<?php echo $row['tra_cat_id']; ?>" class="btn btn-primary btn-mini"><i class="icon-edit"></i> Editar</a>
								<a href="<?php echo $RUTAm; ?>administrador/funciones/categorias_tratamientos-fncs.php?tra_cat_id=<?php echo $row['tra_cat_id']; ?>&accion=Eliminar" class="btn btn-danger btn-mini" onClick="javascript:return confirm('¿Esta seguro que desea eliminar <?php echo $row['tra_cat_nom']; ?>?');"><i class="icon-trash"></i> Eliminar</a>
                    		</div>
						</td>
                        <td><?php echo $row['tra_cat_id']; ?></td>
                        <td><?php echo $row['tra_cat_nom']; ?></td>
						</tr>
					<?php } while ($row = mysql_fetch_assoc($query)); ?>
				</tbody>
			</table>
            </div>        			
			<?php mysql_free_result($query);
			}else{ echo '<div class="alert alert-error"><h4>No existen categorías.</h4></div>'; } ?>
		</div>     	     
	</div>
</body>
<footer>	
</footer>
</html>