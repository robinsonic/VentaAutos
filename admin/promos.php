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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Adminisliacion Principal</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" href="../tmp/2col_leftNav.css" type="text/css" />
<link href="../estilo/twoColFixLtHdr.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../estilo/responsive.css" type="text/css" />
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
<link href="../estilo/responsive.css" rel="stylesheet" type="text/css" />
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
  <h2 id="pageName"></h2>
  <div class="feature"> 
   <!-- InstanceBeginEditable name="Contenido" -->
   
   <script type="text/javascript">
   function subirimagen()
   {
   self.name = 'opener';
remote = open('gestionimagen.php', 'remote', 'width=400,height=150,location=no,scrollbars=yes,menubars=no,toolbars=no,resizable=yes,fullscreen=no, status=yes');
 	remote.focus();
   }
   </script>
   
   <script type="text/javascript">
function setpic()
{
  var ruta=document.getElementById('pics').value;
 var img=document.getElementById('target');
 img.src=ruta;
  
  
}
</script>

   <script type="text/javascript">
function setruta()
{
  setpic();
  var ruta=document.getElementById('pics').value;
  var frm=document.getElementById('idfoto');
  frm.value=ruta;
  
}
</script>
   
   <h1>A&ntilde;adir Promos </h1>
   <p>&nbsp;</p>
   
   <?php


   ?>
   
   <ul id="promos">
  
	 
   <li>
   <img id="target" src="../promo/data1/images/promo1.jpg" width="150" height="150"></img>
   
<!--   <form id="promoform" action="uploadpromo.php?id=6" method="post" enctype="multipart/form-data">
   Seleccione el archivo:
   <input type="text" id="idfoto" name="idfoto" value="">
   <input type="text" id="idURL" name="idURL" value="#">
<input type="file" name="foto" value="promo6.jpg">
<input type="submit" value="Enviar">";-->
   </li>
 

  </ul>
<ul id="promos"> 
<li> 
Seleccionar promo a cambiar:
<select id="pics" onchange=setruta()>
<option id ="op" value="../promo/data1/images/promo1.jpg">promo1</option>
<option id ="op" value="../promo/data1/images/promo2.jpg">promo2</option>
<option id ="op" value="../promo/data1/images/promo3.jpg">promo3</option>
<option id ="op" value="../promo/data1/images/promo4.jpg">promo4</option>
<option id ="op" value="../promo/data1/images/promo5.jpg">promo5</option>
<option id ="op" value="../promo/data1/images/promo6.jpg">promo6</option>
<option id ="op" value="../promo/data1/images/promo7.jpg">promo7</option>
<option id ="op" value="../promo/data1/images/promo8.jpg">promo8</option>
</select>  
 </li>
 <br>
  <li>
 
   
   <form id="promoform" action="uploadpromo.php" method="post" enctype="multipart/form-data">
   <!--Seleccione el archivo:-->
   Introduce URL:
   <input type="hidden" id="idfoto" name="idfoto" value="">
   <input type="text" id="idURL" name="idURL" value="#">
   </li>
   <br>
   <li>
<input type="file" name="foto" value="promo1.jpg">
</li>
<br>
<li>
<input type="submit" value="Enviar">;
   </li>
 
    </ul>
    <p>&nbsp;</p>
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
  
  <?php include("../includes/cabeceraadmin.php");?>
  </div>
  
  
  

</div>
<!--end navbar -->
<!--<div id="siteInfo">Adminisliacion Tienda Online</div>-->

</body>
<!-- InstanceEnd --></html>

<?php
//mysql_free_result($Recordset1);

//mysql_free_result($ConsultaCategorias);
?>
