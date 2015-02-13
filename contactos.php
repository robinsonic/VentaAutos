  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/BaseAdmin.dwt" codeOutsideHTMLIsLocked="false" -->
<!-- DW6 -->
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->

<!-- InstanceBeginEditable name="doctitle" -->
<title>Administracion Principal Tienda</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" href="tmp/2col_leftNav.css" type="text/css" />
<link rel="stylesheet" href="estilo/responsive.css" type="text/css" />
<link rel="stylesheet" href="estilo/contactos.css" type="text/css" />
<script src="script/funciones.js" language="JavaScript"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
 
        <script>
            $(document).ready(function() {
                var canvas = document.getElementById("myCanvas");
                var ctx = canvas.getContext("2d");
				ctx.font = "30px Arial";
ctx.fillText("Venta Autos",10,50);
var img = document.getElementById("scream");
ctx.drawImage(img, 0, 10,10);
            });
        </script>

</head>

<body>
<img id="scream" src="images/rubix.jpg" alt="Venta Autos" width="145" height="145">
<canvas id="myCanvas" width="300" height="100">
            <!-- Insert fallback content here -->
			
        </canvas>
   
<div id="masthead">

<div id="slider"><?php include("promo/wowslider.html");?></div>
  

  <div id="globalNav"> 
  
  
  </div>
</div>
<!-- end masthead -->



<div id="content">

  <div id="breadCrumb"> <a href="index.php">Autos</a> / <a href="servicios.php">Servicios</a> / <a href="#">Contactos</a> / <div id="after"></div></div>
 <?php 
 if (!isset($_GET['recordID'])){
echo "<h2>Contactar Administración</h2>";
}else{
echo "<h2>contactar ".$_GET['recordID']." aqui!</h2>";
}
?>
<br>
<?php if (isset($_COOKIE['msg'])) echo " <h3>$_COOKIE[msg]<h3>" 
?>
<div id="stylized" class="myform">

<form id="form1" action="includes/mail.php" method="POST">

    <label>Name
        <span class="small">Add your name</span>
    </label>
<input class="small" type="text" name="name">
    <label>Email
        <span class="small" >Enter a Valid Email</span>
    </label>
<input class="small" type="email" name="email" required>

<br>
<br>


    <label>Message
        <span class="small">Type Your Message</span>
    </label>
<textarea class="small" name="message" rows="6" cols="25" required></textarea><br>

    <button id="sub" type="submit" value="Send" style="margin-top:15px;">Submit</button>
<div class="spacer"></div>

</form>

</div> <!-- end of form class -->






   
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
  <div ><?php include("includes/catalogo.php");?></div>
  <div id="sectionLinks">
 <!--<div id="sectionLinks">--> <?php include("loginforms.php"); ?> <!--</div>-->
  

  </div>

</div>
<!--end navbar -->
<div id="siteInfo"><!--Administracion Tienda Online--></div>

</body>
</html>
