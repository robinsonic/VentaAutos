<?php /*include('../Connections/connect.php');*/ ?>
<?php
mysql_select_db($database_connect, $connect);
$query_Recordset1 = "SELECT * FROM tblcategoria ORDER BY tblcategoria.strDescripcion";
$Recordset1 = mysql_query($query_Recordset1, $connect) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!--<nav class="egmenu">-->

<ul class="egmenu">
<?php echo "<li><h3>Categorias:</h3></li>";do { ?>
 <li> <a href="index.php?recordID=<?php echo $row_Recordset1['strDescripcion']; ?>"
  onClick="doSomething()"
  ><?php echo $row_Recordset1['strDescripcion']; ?></a> </li> <!--<br>-->
  <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
<?php
mysql_free_result($Recordset1);
?>
</ul>
<!--</nav>-->