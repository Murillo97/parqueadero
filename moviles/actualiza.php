<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
include "conexion.php";


$placa = $_POST['placa'];
$marca = $_POST['marca'];
$hora_entrada = $_POST['hora_entrada'];
$hora_salida = $_POST['hora_salida'];


$consula = $conexion->query("UPDATE `vehiculos`SET`hora_salida`='$hora_salida' WHERE `placa`='$placa'");

if ($consula) {
header("location:index.html"); // returna al index cuando no se EJECUTA con exito
}
else {
  echo "Error";
}
 ?>
