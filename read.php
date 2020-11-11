<?php

include 'conexion2.php';

if(!isset($_POST['buscar'])){

    $_POST['buscar']="";
    $buscar = $_POST['buscar'];
}

$buscar = $_POST['buscar'];

$SQL_READ = "SELECT * FROM product Where name LIKE '%".$buscar."%'";

$sql_query = mysqli_query($conn, $SQL_READ);

?>