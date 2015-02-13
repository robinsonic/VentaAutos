<?php
//include ("promos.php");
include ("../Connections/connect.php");
?>
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php

/*--prueba--*/


$oldname=$_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'], $_REQUEST['idfoto']);
//header("location: promos.php"); // Redirecting To Other Page

 $con=mysqli_connect("localhost","root","root","dbshop") or 
      die("Problemas con la conexión a la base de datos");
	  
    mysqli_query($con,"update tblpromo set strURL='$_REQUEST[idURL]' 
              where strDescripcion='$_REQUEST[idfoto]'") or
      die(mysqli_error($con));

header("location: promos.php"); // Redirecting To Other Page
?>
</body>
</html>