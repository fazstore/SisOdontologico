<?php 
	if (!isset($_SESSION)) session_start();
	include("../../start.php");
	fnc_autentificacion();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Odontograma</title>
    <?php include(RUTAp.'jquery/styl-jquery.php'); ?>
	<?php require_once(RUTAs.'styles/styl-bootstrap.php');?>
</head>

<body>
<div>

<?php include(RUTAcom.'menu-principal.php'); ?>
</div>
<div class="row-fluid">
  <div class="span1"></div> <!-- span 1-->
  <div class="span5">
  <div> <input type="text" id="Usuario" placeholder="Usuario" >
       	<button type="button" class="btn btn-primary"><img alt="#" src="../../images/lupa.png" height="10px"></button> 
  </div> 
   <div>
   1ra Cosnulta: 11/1/2012
   </div>
   </div>
   <div class="span5">
   <table width="200" border="0">
  <th>
  <tr>
    <td>Consulta</td>
    <td>Tratamiento</td>
  </tr>
  </th>
  <hr>
  <tbody>
  <tr>
    <td>11/1/2012</td>
    <td>caries</td>
  </tr>
  </tbody>
</table>
   </div>
   <div class="span1">
   <div>
   </div> <!-- span 4-->
  </div>
  <div>
  		<h3>Odontograma</h3>
  </div>
    <div class="row-fluid"> <!--inicio contenedor seccion odontograma-->
    <div class="span6"> <!-- odonto 1 -->
    <div><!-- Seccion 1 -->
    <table style="padding:20px"> 
 	 		<tr>
    		<td>
    	<table border="1" ><!--FILA 1 : ODONTO 1-->
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
		</td>
		<!--FILA 1 : ODONTO 1 -- FIN-->
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 2 -->
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 2 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 3 -->
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 3 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 4 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 4 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 5 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 5 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 6 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 6 -- FIN-->
        <td>
          <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 7 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 7 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 8 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 8 -- FIN-->
        <td>
	</tr>
    <!---FIN FILA 1 *********************************  FIN   F1   ****************-->
    
    <tr height="6PX">
    </tr>
    
    
     		
    
    <!---FIN FILA 1 *********************************  FIN   F1   ****************-->
   </table>
   
   
   
   <!---********************************************************************-->
   
   
  <table style="padding:20px"> 
 	 		<tr>
    		<td width="45">
    	
		</td>
		<!--FILA 1 : ODONTO 1 -- FIN-->
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 2 -->
        
        <td width=" 45">
		
        <!--FILA 1 : ODONTO 2 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 3 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 3 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 4 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 4 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 5 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 5 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 6 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 6 -- FIN-->
        <td>
          <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 7 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 7 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 8 -->
        
        <td>
		
        <td>
	</tr>
    <!---FIN FILA 1 *********************************  FIN   F1   ****************-->
    
    <tr height="6PX">
    </tr>
    
    
     		
    
    <!---FIN FILA 1 *********************************  FIN   F1   ****************-->
   </table>
  
  </div>
  <hr>
  	<div> <!---  seccion 2 -->
     <table style="padding:20px"> 
 	 		<tr>
    		<td width="45">
    	
		</td>
		<!--FILA 1 : ODONTO 1 -- FIN-->
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 2 -->
        
        <td width=" 45">
		
        <!--FILA 1 : ODONTO 2 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 3 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 3 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 4 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 4 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 5 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 5 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 6 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 6 -- FIN-->
        <td>
          <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 7 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 7 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 8 -->
        
        <td>
		
        <td>
	</tr>
    <!---FIN FILA 1 *********************************  FIN   F1   ****************-->
    
    <tr height="6PX">
    </tr>
    
    
     		
    
    <!---FIN FILA 1 *********************************  FIN   F1   ****************-->
   </table>
  
    
    <table style="padding:20px"> 
 	 		<tr>
    		<td>
    	<table border="1" ><!--FILA 1 : ODONTO 1-->
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
		</td>
		<!--FILA 1 : ODONTO 1 -- FIN-->
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 2 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 2 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 3 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 3 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 4 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 4 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 5 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 5 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 6 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 6 -- FIN-->
        <td>
          <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 7 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 7 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 8 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 8 -- FIN-->
        <td>
	</tr>
    <!---FIN FILA 1 *********************************  FIN   F1   ****************-->
    
    <tr height="6PX">
    </tr>
    
    
     		
    
    <!---FIN FILA 1 *********************************  FIN   F1   ****************-->
   </table>
   
   
   
   <!---********************************************************************-->
   
   
 
    
	</div><!-- span 6-->
	
        </div><!-- fin span 6 odonto 1--->
        
    <div class="span6"> <!-- odonto 2 -->
    
    
    <div><!-- Seccion 1 -->
    <table style="padding:20px"> 
 	 		<tr>
    		<td>
    	<table border="1" ><!--FILA 1 : ODONTO 1-->
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
		</td>
		<!--FILA 1 : ODONTO 1 -- FIN-->
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 2 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 2 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 3 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 3 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 4 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 4 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 5 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 5 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 6 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 6 -- FIN-->
        <td>
          <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 7 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 7 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 8 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 8 -- FIN-->
        <td>
	</tr>
    <!---FIN FILA 1 *********************************  FIN   F1   ****************-->
    
    <tr height="6PX">
    </tr>
    
    
     		
    
    <!---FIN FILA 1 *********************************  FIN   F1   ****************-->
   </table>
   
   
   
   <!---********************************************************************-->
   
   
  <table style="padding:20px"> 
 	 		<tr>
    		<td width="45">
    	
		</td>
		<!--FILA 1 : ODONTO 1 -- FIN-->
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 2 -->
        
        <td width=" 45">
		
        <!--FILA 1 : ODONTO 2 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 3 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 3 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 4 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 4 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 5 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 5 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 6 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 6 -- FIN-->
        <td>
          <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 7 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 7 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 8 -->
        
        <td>
		
        <td>
	</tr>
    <!---FIN FILA 1 *********************************  FIN   F1   ****************-->
    
    <tr height="6PX">
    </tr>
    
    
     		
    
    <!---FIN FILA 1 *********************************  FIN   F1   ****************-->
   </table>
  
  </div>
  <hr>
  	<div> <!---  seccion 2 -->
     <table style="padding:20px"> 
 	 		<tr>
    		<td width="45">
    	
		</td>
		<!--FILA 1 : ODONTO 1 -- FIN-->
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 2 -->
        
        <td width=" 45">
		
        <!--FILA 1 : ODONTO 2 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 3 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 3 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 4 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 4 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 5 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 5 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 6 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 6 -- FIN-->
        <td>
          <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 7 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 7 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 8 -->
        
        <td>
		
        <td>
	</tr>
    <!---FIN FILA 1 *********************************  FIN   F1   ****************-->
    
    <tr height="6PX">
    </tr>
    
    
     		
    
    <!---FIN FILA 1 *********************************  FIN   F1   ****************-->
   </table>
  
    
    <table style="padding:20px"> 
 	 		<tr>
    		<td>
    	<table border="1" ><!--FILA 1 : ODONTO 1-->
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
		</td>
		<!--FILA 1 : ODONTO 1 -- FIN-->
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 2 -->
        
        <td>
		<table border="-1">

 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 2 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 3 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 3 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 4 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 4 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 5 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 5 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 6 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 6 -- FIN-->
        <td>
          <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 7 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 7 -- FIN-->
        <td>
        <td width="6PX">
        </td>
        <!--FILA 1 : ODONTO 8 -->
        
        <td>
		<table border="-1">
 	 		<tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/1.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/2.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/3.png" /></a></td>
        	</tr>
            <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/4.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/5.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/6.png" /></a></td>
        	</tr>
             <tr>
                <td><a href="#"><img class="rollover" img src="../../images/odo/7.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/8.png" /></a></td>
                <td><a href="#"><img class="rollover" img src="../../images/odo/9.png" /></a></td>
        	</tr>
        </table>
        <!--FILA 1 : ODONTO 8 -- FIN-->
        <td>
	</tr>
    <!---FIN FILA 1 *********************************  FIN   F1   ****************-->
    
    <tr height="6PX">
    </tr>
    
    
     		
    
    <!---FIN FILA 1 *********************************  FIN   F1   ****************-->
   </table>
   
   
   
   <!---********************************************************************-->
   
   
 
    
	</div><!--  fin span 6 odonto 2-->
	
        </div><!-- fin span 6 odonto 2--->
    
    
 	</div> <!--fin contenedor seccion odontograma-->
    <hr>
    <div class="row-fluid"> <!--inicio contenedor seccion odontograma-->
 		<div class="span4"> <!--Tabla 1 ENFERMEDAD PERIODONTAL --->
        <br>
         <strong> ENFERMEDAD PERIODONTAL</strong>
        <table cellspacing="3" border="1" align="center" style="text-align:center">
              <th>
              <tr>
                <td width="50PX">CODIGO</td>
                <td width="180PX">TIPO</td>
                <td width="25PX">SI</td>
                <td width="25PX">NO</td>
              </tr>
              <th>
              <tbody>
              <tr>
                <td> <?php ?></td>
                <td>Materia Alba</td>
                <td><input type="checkbox"></td>
                <td><input type="checkbox"></td>
              </tr>
              <tr>
                <td> <?php ?></td>
                <td>Placa Bacteriana</td>
                <td><input type="checkbox"></td>
                <td><input type="checkbox"></td>
              </tr>
              <tr>
                <td> <?php ?></td>
                <td>
                <table  align="center" style="text-align:center" >
                      <tr>
                        <td>CALCULOS</td>
                        <td><table  border="1">
                                              <tr>
                                                <td>Supragingival</td>
                                              </tr>
                                              <tr>
                                                <td>Subgingival</td>
                                              </tr>
                                            </table>
                                            </td>
                      </tr>
                     
                     </table>
                </td>
                <td><input type="checkbox"></td>
                <td><input type="checkbox"></td>
              	</tr>
              <tr>
                <td> <?php ?></td>
                <td>Bolsa Periodontal</td>
                <td><input type="checkbox"></td>
                <td><input type="checkbox"></td>
              </tr>
             </tbody>
           </table>

        </div>
        <div class="span4"> <!--Tabla 1 ENDODONCIA --->
        <br>
        <strong>ENDODONCIA</strong>
        <table cellspacing="2" border="1" align="center" style="text-align:center" >
          <th>
              <tr>
                <td width="50PX">CODIGO</td>
                <td width="180PX">TIPO</td>
                <td width="25PX">SI</td>
                <td width="25PX">NO</td>
              </tr>
              <th>
          <tbody height="120px">
          <tr>
            <td><?PHP ?></td>
            <td>Procesos Reversibles</td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
          </tr>
          <tr>
            <td><?PHP ?></td>
            <td>Procesos Inreversibles</td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
          </tr>
          </tbody>
        </table>

        </div>
        <div class="span4"> <!--Tabla 1 OCLUSION --->
        <br>
        <strong>OCLUSION</strong>
        <table cellspacing="2" border="1" align="center" style="text-align:center" >
          <th>
              <tr>
                <td width="50PX">CODIGO</td>
                <td width="180PX">TIPO</td>
                <td width="25PX">SI</td>
                <td width="25PX">NO</td>
              </tr>
              <th>
          <tbody height="120px">
          <tr>
            <td><?PHP ?></td>
            <td>Maloclusion Dentaria</td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
          </tr>
          <tr>
            <td><?PHP ?></td>
            <td>Maloclusion Maxilar</td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
          </tr>
          </tbody>
        </table>

        
        </div>
   
    
 	</div> <!--fin contenedor seccion odontograma-->

    <!-- odonto 1 Fin -->
  </div> 
</div>
<br>
<div class="row-fluid">

<div class="span1">
</div>
<div class="span10">
<strong>Observación </strong>
<textarea style="width:800px" ></textarea>
<hr>
<div class="row-fluid">
<div class="span6" align="center">
<button type="button" class="btn btn-primary" style="width:120px">GUARDAR</button>
</div>
<div class="span6" align="center">
<button type="button" class="btn btn-primary" style="width:120px">CITAR</button> 
</div>
</div>
</div>
<div class="span1">
</div>
</div>

</body>
</html>