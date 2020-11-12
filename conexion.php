<?php
$servidor = "us-cdbr-east-02.cleardb.com";
$usuario = "b765542b61830d";
$password ="8abc6081";

try {
 
    $conn = new PDO("mysql:host=$servidor;dbname=heroku_cf559f093d3cdfd", $usuario, $password, 
    array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // echo "Conectado";
} catch(PDOException $e) {
  echo "Error de conexión: " . $e->getMessage();
}
?>

