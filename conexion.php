<?php
$servidor = "localhost";
$usuario = "root";
$password ="";

try {
 
    $conn = new PDO("mysql:host=$servidor;dbname=bsale_test", $usuario, $password, 
    array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // echo "Conectado";
} catch(PDOException $e) {
  echo "Error de conexión: " . $e->getMessage();
}
?>