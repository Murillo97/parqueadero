<?php
include 'conexion.php';
$consulta = laConsulta();
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
       </li>
       <li class="items">
       <a href="Consultar.php" class="section">Consultar</a>
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
   <table >

     <tr>
       <th>PLACA</th>
       <th>MARCA</th>
       <th>HORA ENTRADA</th>
       <th>HORA SALIDA</th>
        <th>SALDO</th>


     </tr>

       <?php
       while ($vehiculo =$consulta->fetch_array()) {
         // code...
         ?>
         <tr>
         <td><?php echo $vehiculo['placa'];?></td>
         <td><?php echo $vehiculo['marca'];?></td>
         <td><?php echo $vehiculo['hora_entrada'];?></td>
         <td><?php echo $vehiculo['hora_salida'];?></td>

         </tr>
         <?php
       }
       ?>

   </table>

     </div>
 <script src="js/desplazamiento.js"></script>

 </body>
 </html>
