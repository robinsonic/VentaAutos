<?php include('../Connections/connect.php'); 
//session_start();
//$username= $_SESSION['usuario'];
?>
<?php

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 liansitional//EN" "http://www.w3.org/li/xhtml1/DTD/xhtml1-liansitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/BaseAdmin.dwt" codeOutsideHTMLIsLocked="false" -->
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Adminisliacion Principal</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" href="../tmp/2col_leftNav.css" type="text/css" />
<link href="../estilo/twoColFixLtHdr.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../estilo/responsive.css" type="text/css" />
<script src="script/funciones.js" language="JavaScript"></script>
<link rel="stylesheet" href="adminlogin.css" type="text/css" />
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
li{
float: left;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
 
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
  <div class="feature"> 
   <!-- InstanceBeginEditable name="Contenido" -->
   
   <script type="text/javascript">
  $('#toggle-login').click(function(){
  $('#login').toggle();
});

function showlogin()
{
  document.getElementById('adminlogin').style.display='block';
  
};
   </script>
   
   

   
   <p>&nbsp;</p>
   
   <!----------------------------LOGIN START-------------------------------->
   <span href="#" class="button" id="toggle-login" onclick=showlogin()>Log in</span>

<div id="login" >
  <div id="triangle"></div>
  <h1>Log in</h1>
  <form id="adminlogin" action="adminlogin.php" style='display:none;'>
    <input type="Email" name="name" placeholder="Name" />
    <input type="password" name="password" placeholder="Password" />
    <input type="submit" value="Log in" />
  </form>
</div>
 <?php if (isset($_COOKIE['error'])) echo " $_COOKIE[error]" 
?>  
    <p>&nbsp;</p>
  <!-- InstanceEndEditable -->  
</div>
<!--end content -->
  
  
  

</div>
<!--end navbar -->
<!--<div id="siteInfo">Adminisliacion Tienda Online</div>-->

</body>
<!-- InstanceEnd --></html>