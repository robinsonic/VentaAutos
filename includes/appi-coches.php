<?php
$mysqli = new mysqli("localhost", "root", "root", "dbshop");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//$valor=$mysqli->query("select idCategoria from tblcategoria")
$res = $mysqli->query("SELECT * FROM tblproducto INNER JOIN tblcategoria ON tblproducto.intCategoria=tblcategoria.idCategoria;");
//$res = $mysqli->query("SELECT * FROM tblproducto group by intCategoria");
// http://stackoverflow.com/questions/19146922/php-dynamically-generate-json
$json = array();


while($row = $res->fetch_assoc()) {
    $productos = array(
        'id' => $row['idProducto'],
        'nombre' => $row['strNombre'],
        'precio' => $row['dblPrecio'],
        'estado' => $row['intEstado'],
        'categorie' => $row['intCategoria']

    );
    array_push($json, $productos);
}

// $json = $res->fetch_all( MYSQLI_ASSOC );
// while ( $row = $res->fetch_assoc() ){
//     $json[] = json_encode($row);
// }
header('Content-Type: application/json');
echo json_encode($json);
?>