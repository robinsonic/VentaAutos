<?php
include('../Connections/connect.php'); 
//include('session.php');
session_start();
if($_SESSION['usuario']==false){header("location: ../index.php");} 
$nom= $_SESSION['usuario'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Administracion Principal Tienda</title>

<link rel="stylesheet" href="../tmp/2col_leftNav.css" type="text/css" />
<link rel="stylesheet" href="../estilo/responsive.css" type="text/css" />
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style></head>

<body>
<div id="masthead">
  <h1 id="siteName"><img src="../images/rubix.jpg" alt="Logo" width="148" height="122" />Venta Autos</h1>
  <div id="globalNav"> 

</div> </div>
<!-- end masthead -->
<div id="content">
  <div id="breadCrumb"> <a href="../index.php">Autos</a> / <a href="../servicios.php">Servicios</a> / <a href="../contactos.php">Contactos</a> / </div>
  <h2 id="pageName">Hola <?php echo $nom; ?>!</h2>
  
  <!--<div class="feature"> -->
  <div id="resultados1">
   <!-- InstanceBeginEditable name="Contenido" -->
   <h1>Bienvenido a tu Perfil</h1>
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
  <div id="userLinks">

<!---------------------------PARTE DE AYOUB (BUSCA EL FICHERO CABECERAADMIN.PHP)----------------------->
  
  <?php include("includes/cabeceraadmin.php");//VA A SACAR EL MENU A LA IZQUIERDA ?>
 
<!---------------------------FIN DE LA PARTE DE AYOUB---------------------------------------------------> 
  </div>
  
 
</div>

<br />
</body>
<!-- InstanceEnd --></html>
