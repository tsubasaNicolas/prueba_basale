<?php
$servidor = "us-cdbr-east-02.cleardb.com";
$usuario = "bee77fd938afc9";
$password ="8c1a4148";

try {
 
    $conn = new PDO("mysql:host=$servidor;dbname=heroku_7ab1f012f74b503", $usuario, $password, 
    array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // echo "Conectado";
} catch(PDOException $e) {
  echo "Error de conexión: " . $e->getMessage();
}
?>

