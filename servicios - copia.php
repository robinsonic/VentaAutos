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
  
<h2>Encuentra tu Taller mas Cercano</h2>
<br>
<p>
<a href="http://www.renault.es/posventa/?utm_source=google&utm_medium=cpc&utm_campaign=AfterSales+Renault+Brand" target=_blank><h3>Renault Donostia</h3></a>
				<p>Dirección: Igeltegi Kalea 1 Bajo <br>Población: San sebastián <br>Distancia: 1.7 Km <br>Horario: Lunes a Viernes de 9h15 a 13h<a href="http://www.buscadordetalleres.com/search/workshop/address/donostia" target=_blank>Ver más...</a></p>
</p>
<input type="button" value="map" onclick=showmap()  />
 <input type="button" value="video" onclick=showvideo()  />
 <iframe id="video" width="0" height="0" src="https://www.youtube.com/embed/97zxeU9sNYI" frameborder="0" ></iframe>
  <iframe id="map" width="300" height="200" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2903.179968252604!2d-1.9661347999999998!3d43.310491899999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51af8aff53e147%3A0x7bfdfd6931f1bd4b!2sIgeltegi+Kalea%2C+1%2C+20014+Donostia%2C+Gipuzkoa!5e0!3m2!1sen!2ses!4v1423570276755" width="600" height="450" "> </iframe>
  
   
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
