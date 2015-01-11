<?php 
include('../../start.php');
	$tra_rea_fec=$_GET['tra_rea_fec'];
    $per_id=$_GET['per_id'];
	$sqlCotiza = sprintf("SELECT * FROM detalle_tratamientosxrealizar inner join tratamientos on detalle_tratamientosxrealizar.tra_id=tratamientos.tra_id inner join precios on tratamientos.tra_id=precios.tra_id WHERE per_id = '".$per_id."' and tra_rea_fec='".$tra_rea_fec."'and det_tra_rea_estado='C'");
	$queryCotiza = mysql_query($sqlCotiza, $conexion_mysql) or die(mysql_error());
	$rowCotiza = mysql_fetch_assoc($queryCotiza);
	$tot_rowsCotiza = mysql_num_rows($queryCotiza);
	
	$sqlper = sprintf("SELECT * FROM persona inner join telefono on persona.per_id= telefono.per_id  
WHERE persona.per_id ='".$per_id."' and tel_tipo ='Convencional'");
	$queryper = mysql_query($sqlper, $conexion_mysql) or die(mysql_error());
	$rowper = mysql_fetch_assoc($queryper);

?>
<input type="hidden" id="per_id" name="per_id" value="<?php echo $per_id;?>" >
<input type="hidden" id="URLper" name="URLper" value="<?php echo $RUTAm.'historia_clinica/funciones/bus-persona.php';?>">
<input type="hidden" id="URL_CREA_per" name="URL_CREA_per" value="<?php echo $RUTAm.'historia_clinica/funciones/crea-persona.php';?>">
<script>
	$( document ).ready(function() {
		$("#btnfac").hide();
		$("#bbus").hide();
		$("#bcre").hide();
        $("#imp_fac").hide();

        datosfac=$("#datosfac").val();
		if(datosfac==1)
		{ 
			$("#nombre").val($("#nom").val());
			$("#documento").val($("#doc").val());
			$("#telefono").val($("#tel").val());
			$("#direccion").val($("#dir").val());
			$("#email").val($("#mail").val());
			$("#nombre").attr('disabled',true);
			$("#documento").attr('disabled',true);
			$("#telefono").attr('disabled',true);
			$("#direccion").attr('disabled',true);
			$("#email").attr('disabled',true);
			}
	});
	function datosfactura()
	{	per_id=$("#per_id").val();
		datosfac=$("#datosfac").val();
		
		if(datosfac==1)
		{ 
			$("#nombre").val($("#nom").val());
			$("#documento").val($("#doc").val());
			$("#telefono").val($("#tel").val());
			$("#direccion").val($("#dir").val());
			$("#email").val($("#mail").val());
			$("#nombre").attr('disabled',true);
			$("#documento").attr('disabled',true);
			$("#telefono").attr('disabled',true);
			$("#direccion").attr('disabled',true);
			$("#email").attr('disabled',true);
		$("#bbus").hide();
		$("#bcre").hide();	
		}
		if(datosfac==2)
		{ 
			$("#nombre").val("");
			$("#documento").val("");
			$("#telefono").val("");
			$("#direccion").val("");
			$("#email").val("");
			$("#nombre").attr('disabled',false);
			$("#documento").attr('disabled',false);
			$("#telefono").attr('disabled',false);
			$("#direccion").attr('disabled',false);
			$("#email").attr('disabled',false);
			$("#bbus").show();
			}	
	}
	function FacturarTratamientos(fecha,per_id)
	{ 
		//Cabecera
		ModelodePago=$("#SelecioneModeloPago").val();
		Descuento=$("#Aplica_Descuento").val();
		total=$("#total").val();
		tdescuento=$("#tdescuento").val();
		id_fac=$("#id_fac").val();
		url=$("#urlfac").val();
		//alert(fecha+" "+per_id+" "+ModelodePago+" "+Descuento +" "+id_fac);
		parametros='ModelodePago='+ModelodePago+'&Descuento='+Descuento+'&id_fac='+id_fac+'&tdescuento='+tdescuento+'&total='+total+'&fecha='+fecha+'&per_id='+per_id;
		//Detalle de Factura
		$.ajax({
			type: "POST",
			url: url,
			data: parametros,
			success : function (resultado){
				window.open( "../facturacion/factura_PDF.php?id="+resultado, "Imprimir factura" , "width=800 , height = 600")
                $("#imp_fac").show();
                            }
   			});
		}
	function Validatefactura()
		{ 
		id_fac=$("#id_fac").val();
		if(id_fac!=null)
		{
			$("#btnfac").show();
			}
		}
	function ValidarCliente()
		{ 
		docu=$("#documento").val();
		url=$("#URLper").val();
		$.ajax({
			type: "POST",
			url: url,
			data: 'docu='+docu,
			success : function (resultado){
						if (resultado == "BORRAR")
						{ 
						$("#nombre").val("");
						$("#direccion").val("");         
						$("#telefono").val("");
						$("#email").val("");
						vex.dialog.alert("USUARIO NO REGISTRADO");
						$("#bbus").hide();
						$('#bcre').show();
						}
						var dataJson = eval(resultado);
						for(var i in dataJson){
						$("#nombre").val(dataJson[i].nom_res);
						$("#direccion").val(dataJson[i].direc_res);         
						$("#telefono").val(dataJson[i].tel);
						$("#email").val(dataJson[i].email);
						}
				}
   			});
		}

	function CrearCliente()
		{ 
			var nom = $("#nombre").val();
			var doc = $("#documento").val();
			var tel = $("#telefono").val();
			var dir = $("#direccion").val();
			var email = $("#email").val();
			//$('#bcre').hide();
			if((nom == "" ) || (doc == "" ) || (tel == "" ) || (dir == "" ) ||(email == "" ))
			{ var mensaje = "Ingrese: ";
				if(nom == "" )
				{  mensaje = mensaje+" Nombre "; }
				if(doc == "")
				{  mensaje = mensaje+" Documento "; }
				if(tel == "" )
				{  mensaje = mensaje+" Teléfono "; }
				if(dir == "" )
				{  mensaje = mensaje+" Dirección "; }
				if(email == "" )
				{  mensaje = mensaje+" Email "; }
				vex.dialog.alert( mensaje + " para continuar.");
			
			}else{
				parametros='nom='+nom+'&doc='+doc+'&tel='+tel+'&dir='+dir+'&dir='+dir+'&email='+email;
				//Detalle de Factura
				var url = $("#URL_CREA_per").val();
				$.ajax({
					type: "POST",
					url: url,
					data: parametros,
					success : function (resultado){
						if (resultado == "Insertado")
						{
							vex.dialog.alert("Creado exitosamente.");
						} else{
							vex.dialog.alert("Error al Crear");
							}
						//vex.dialog.alert(parametros);
					}
					});
				//vex.dialog.alert( "Listo para Crear el usuario con ");
			}
		}
	 function solonumeros(e)
		{
		var keynum = window.event ? window.event.keyCode : e.which;
		if ((keynum == 8) || (keynum == 46))
		return true;
		 
		return /\d/.test(String.fromCharCode(keynum));
		}
</script>
  <?php if($tot_rowsCotiza > 0)	{ ?>
                  <div class="row-fluid">
					<?php do {
							  $totalTra=($rowCotiza['det_tra_rea_cantidad']*$rowCotiza['pre_val']);
							  $descuento=($rowCotiza['pre_des']/100);
							  $totdes=($totdes+($totalTra*$descuento));
							  $totalTra2=$totalTra2+$totalTra; 
							   ?>
                          <?php } while ($rowCotiza = mysql_fetch_assoc($queryCotiza)); ?>
                      <strong>VALOR TOTAL:  $ <a style="font-size:18px"><?php echo $totalTra2;?></a></strong>
                     </div>
                  <?php mysql_free_result($queryCotiza);
              }else{ echo '<div class="alert alert-error"><h4>No existen cotizaciones pendientes.</h4></div>'; } ?>
				<input type="hidden" id="tdescuento" name="tdescuento" value="<?php echo $totdes;?>">
                <input type="hidden" id="total" name="total" value="<?php echo $totalTra2;?>">
<div class="control-group well" >
                 <div class="row-fluid">
                 	<div class="span6">
                   <div>
                   <strong> Forma de Pago</strong>
					<select id="SelecioneModeloPago" name="SelecioneModeloPago">
                      <option value="1">Contado</option>
                      <option value="2">Crédito</option>
                    </select>
                    </div>
                     <div>
                   <strong> Aplica Descuento</strong>
					<select id="Aplica_Descuento" name="Aplica_Descuento">
                      <option value="N">NO</option>
                      <option value="S">SI</option>
                    </select>
                    </div>
                     </div>
                     <input type="hidden" name="per_id" id="per_id" value="<?php echo $per_id; ?>">
					 <input type="hidden" name="tra_rea_fec" id="tra_rea_fec" value="<?php echo $tra_rea_fec; ?>">
					 <input type="hidden" name="urlfac" id="urlfac" value="<?php echo $RUTAm.'historia_clinica/funciones/funciones.php'; ?>">
                     <div class="span1">
                     </div>
                     <div class="span5">
                     <div>
                     <strong>Datos de la Factura</strong>
                     <select id="datosfac" name="datosfac" style=" width:170px" onchange="datosfactura()">
                     	<option value="1" selected>Datos del Paciente</option>
                     	<option value="2">Datos del Terceros</option>
                     </select>
                     </div>
                     <button style="height:60px" class="btn btn-primary" id="btnfac" name="btnfac"  onClick="FacturarTratamientos('<?php echo $tra_rea_fec; ?>','<?php echo $per_id; ?>')"><strong> Confirmar Factura</strong></button>
                     </div> 
                 </div>
                 </div>
             		<div class="row-fluid" >
						<input type="hidden" id="doc" name="doc" value="<?php echo $rowper['per_documento'];?>">
                        <input type="hidden" id="nom" name="nom" value="<?php echo $rowper['per_nombre'];?>">
                        <input type="hidden" id="tel" name="tel" value="<?php echo $rowper['tel_numero'];?>">
                        <input type="hidden" id="dir" name="dir" value="<?php echo $rowper['per_direccion1'];?>">
                        <input type="hidden" id="mail" name="mail" value="<?php echo $rowper['per_mail'];?>">
                      <table>
						  <th></th>
                          
						  <tbody>
						  	<tr>
						  		<td>Cédula: </td>
								<td><input id="documento" maxlength="13" name="documento" placeholder="Cédula o Ruc" required onkeypress="return solonumeros(event)"></td>
                                <td><input type="button" id="bbus" name="bbus" value="Buscar" class="btn btn-info" onClick="ValidarCliente()" ></td>
                                <td><input type="button" id="bcre" name="bcre" value="CREAR" class="btn btn-info" onClick="CrearCliente()"></td>
                                <!--td><input type="button" id="imp_fac" name="imp_fac" value="Imprimir Factura" class="btn btn-inverse" onClick="ImprimirFact('<?php echo $tra_rea_fec; ?>','<?php echo $per_id; ?>')" > -->
                                </td>
						  	</tr>
							  <tr>
								<td>Nombre: </td>
								<td><input id="nombre" name="nombre" placeholder="Nombre"></td>
						  	</tr>
							
                            <tr>
						  		<td>Dirección: </td>
								<td><input id="direccion" name="direccion" placeholder="Dirección "></td>
						  	</tr> 
                            <tr>
						  		<td>Teléfono: </td>
								<td><input id="telefono" name="telefono" placeholder="Teléfono" maxlength="10" required onkeypress="return solonumeros(event)"></td>
						  	</tr>
								<tr>
						  		<td>E-mail: </td>
								<td><input id="email" name="email" placeholder="E-mail"></td>
						  	</tr>
								<tr>
						  		<td>N. Factura: </td>
								<td><input id="id_fac" name="id_fac" placeholder="Número de Factura" onKeyPress="Validatefactura()" required></td>
						  	</tr>

                          </tbody>
					   </table>
                 <div>
               
                
                 </div>    
                 </div>

<script>

    function ImprimirFact(fac,per_id)
    {

        urlCot=$("#urlCot").val();
        var tra_rea = "per_id="+per_id+"&fecha="+fecha;
        $.ajax({
            type: "POST",
            url: urlCot,
            data: tra_rea,
            success : function (resultado) {
                //alert("Paciente Evolucionado");
            }
        });
        //

        window.open( "cotizacion_PDF.php?id="+per_id , "Cotización de Tratamientos" , "width=800 , height = 600");
    }
</script>