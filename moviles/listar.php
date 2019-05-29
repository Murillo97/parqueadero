<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

include "conexion.php";

$placa=$_POST['placa'];

//mysqli_select_db($conexion2,$db) or die ("error");
//$registros=$conexion2->query("SELECT * FROM vehiculos WHERE placa='$placa'");

$registros = $conexion->query("SELECT * FROM vehiculos WHERE placa='$placa'");


 ?>

<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Consulta</title>
   <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/style_registro.css">

   <link rel="stylesheet" href="/icono/font/Flaticon.css">
 </head>
  <body>
    <header class="menu_principal">
      <nav class="navegacion">
        <button type="button" name="button" class="btn-bar"><span class="flaticon-menu"></span></button>
        <h1 class="titulo">Parqueadero</h1>
   </nav>
    <nav class="menu-lateral">
      <div class="panel_uno">
      <img src="imagenes/user.png" alt="" class="imagen-usuario">
      <div class="contenedor-info">
      <p class="nombre-usuario">Mauricio Murillo</p>
      </div>
      </div>
      <div class="panel_dos">
        <ul class="contenedor-items">
          <li class="items">
          <a href="index.html" class="section">Home</a>
        </li>

          <li class="items">
          <a href="resgistro.html" class="section">Registrar</a>
          <li class="items">
          <a href="actualizar.html" class="section">Actualizar</a>
          </li>
          <li class="items">
          <a href="Borrar.html" class="section">Borrar</a>
          </li>
          <li class="items">
          <a href="Contactenos.html" class="section">Contactenos</a>
          </li>

      </li>

        </ul>
      </div>
    </nav>
   </header>
<div class="formu">
    <table>
      <tr>
        <td>PLACA</td>
        <td>MARCA</td>
        <td>HORA ENTRADA</td>
        <td>HORA SALIDA</td>
        <td>SALDO</td>
      </tr>
      <?php
      while ($registro=mysqli_fetch_array($registros)) {
        // code...
?>
      <tr>
        <td><?php echo $registro['placa']; ?></td>
        <td><?php echo $registro['marca']; ?></td>
        <td><?php echo $registro['hora_entrada']; ?></td>
        <td><?php echo $registro['hora_salida']; ?></td>
        <td>En progress</td>
      </tr>
      <?php
      }
      ?>
    </table>

</div>

</div>
  </body>
</html>
