<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
include "conexion.php";


$placa = $_POST['placa'];
$marca = $_POST['marca'];
$hora_entrada = $_POST['hora_entrada'];

$consula = $conexion->query("INSERT INTO vehiculos (placa,marca,hora_entrada) VALUES('$placa','$marca','$hora_entrada')");

if ($consula) {
header("location:index.html"); // returna al index cuando no se loguea con exito
}
else {
  echo "Error";
}
 ?>
