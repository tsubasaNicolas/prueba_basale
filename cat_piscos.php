<?php

include 'conexion2.php';

if(!isset($_POST['buscar'])){


$SQL_READ = "SELECT * FROM `product` WHERE category =1 ORDER BY price ASC";

$sql_query = mysqli_query($conn, $SQL_READ);
}else{

$buscar = $_POST['buscar'];

$SQL_READ = "SELECT * FROM product Where name LIKE '%".$buscar."%'";

$sql_query = mysqli_query($conn, $SQL_READ);
}

?>