<?php
$servidor = "us-cdbr-east-02.cleardb.com";
$usuario = "b891cdbe3ce634";
$password ="6bc7691b";

try {
 
    $conn = new PDO("mysql:host=$servidor;dbname=heroku_21c0133d534c49a", $usuario, $password, 
    array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // echo "Conectado";
} catch(PDOException $e) {
  echo "Error de conexión: " . $e->getMessage();
}
?>