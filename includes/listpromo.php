<?php 
include ('Connections/connect.php');
   $con=mysqli_connect("localhost","root","root","dbshop") or 
      die("Problemas con la conexión a la base de datos");
	  
    $registros=mysqli_query($con,"select strURL from tblpromo") or
      die(mysqli_error($con));
	  
	$i=0;
    $promo[7]=0;
    while ($reg=mysqli_fetch_array($registros))
    {	  
	  
$promo[$i]=$reg['strURL'];
$i++;
    }
	
	$promo1= $promo[0];
	$promo2= $promo[1];
	$promo3= $promo[2];
	$promo4= $promo[3];
	$promo5= $promo[4];
	$promo6= $promo[5];
	$promo7= $promo[6];
	$promo8= $promo[7];

	
    mysqli_close($con);
?>