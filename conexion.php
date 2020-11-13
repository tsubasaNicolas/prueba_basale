<?php
$servidor = "us-cdbr-east-02.cleardb.com";
$usuario = "b2d787f32ab4a5";
$password ="2383fa36";

try {
 
    $conn = new PDO("mysql:host=$servidor;dbname=heroku_b3888a669de792c", $usuario, $password, 
    array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // echo "Conectado";
} catch(PDOException $e) {
  echo "Error de conexión: " . $e->getMessage();
}
?>

