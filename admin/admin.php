<?php
session_start();
if($_SESSION['usuario']==false){header("location: index.php");} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/BaseAdmin.dwt" codeOutsideHTMLIsLocked="false" -->
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Administracion Principal Tienda</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" href="../tmp/2col_leftNav.css" type="text/css" />
<link rel="stylesheet" href="../estilo/responsive.css" type="text/css" />
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style><script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
 
        <script>
            $(document).ready(function() {
                var canvas = document.getElementById("myCanvas");
                var ctx = canvas.getContext("2d");
				ctx.font = "30px Arial";
ctx.fillText("Admin Panel",10,50);
var img = document.getElementById("scream");
ctx.drawImage(img, 0, 10,10);
            });
        </script>

</head>

<body>
<img id="scream" src="../images/rubix.jpg" alt="Venta Autos" width="145" height="145">
<canvas id="myCanvas" width="300" height="100">
            <!-- Insert fallback content here -->
			
        </canvas>
   
<div id="masthead">


  

  <div id="globalNav"> 
  
  
  </div>
</div>
<!-- end masthead -->
<div id="content">
  <div id="breadCrumb"> <a href="../index.php">Autos</a> / <a href="../servicios.php">Servicios</a> / <a href="../contactos.php">Contactos</a> / </div>
  <h2 id="pageName"></h2>
  <div class="feature"> 
   <!-- InstanceBeginEditable name="Contenido" -->
   <h1>Bienvenido a la Administracion</h1>
   <h2>Seleccione una opcion del menu de la izquierda </h2>
   <!-- InstanceEndEditable -->  </div>
</div>
<!--end content -->
<div id="navBar">
  <div id="search">
    <form action="#">
      <label>search</label>
      <input name="searchFor" type="text" size="10" />
      <input name="goButton" type="submit" value="go" />
    </form>
  </div>
  <div id="sectionLinks">
  
  <?php include("../includes/cabeceraadmin.php");?>
   <!--- <ul>
      <li><a href="#">sectionLink</a></li>
      <li><a href="#">sectionLink</a></li>
      <li><a href="#">sectionLink</a></li>
      <li><a href="#">sectionLink</a></li>
      <li><a href="#">sectionLink</a></li>
      <li><a href="#">sectionLink</a></li>
    </ul>-->
  </div>
  <div class="relatedLinks">
 
  
</div>
<!--end navbar -->
<div id="siteInfo">Administracion Tienda Online</div>
<br />
</body>
<!-- InstanceEnd --></html>
