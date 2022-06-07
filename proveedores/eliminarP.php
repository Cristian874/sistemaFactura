<?php

include '../model/conexion.php';
$sentencia = $bd->query("SELECT * FROM proveedores");
$almacen = $sentencia->fetchALL(PDO::FETCH_OBJ);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista Proveedores</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="../css/normalize.css" />
    <link rel="stylesheet" href="../css/app.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<header class="header">
  <div class="header-blanco">
  <div class="contenedor">
        <div class="header__menu">

          <div class="header__logo">
            <img src="../img/logo.png" alt="logotipo" />
          </div>

          <div class="header__title">
            <h2>Eliminar Proveedores</h2>
          </div>

          <div class="header__logo">
            <img class="logo__img" src="../img/logo.png" alt="logotipo" />
          </div>

        </div><!--cerramos el header__menu-->
      </div><!--cerramos el contenedor-->

  </div>
   

    </header>


    <!--- OPCIÓN DEL BUSCADOR PROGRAMARLO LA PROXIMA SEMANADA
    <h2 class="text-center mt-5 listado-h2">Listado de todos los registros de proveedores</h2>
    <div class="buscador">
      <form class="proveedores contenedor">
        <div class=" buscador-boton">
          <div class="buscador-2 opcion">
            <label for="buscador">Ingrese el RFC a buscar</label>
            <input type="text" id="buscador" />
          </div>
          <div class="boton-buscador">
            <input type="button" value="Buscar " class="boton pro-buscar" />
          </div>
        </div>
      </form>
    </div><!--cerramos el buscador-->-->

<section class="tabla contenedor">





<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Rfc</th>
      <th scope="col">Nombre</th>
      <th scope="col">Banco</th>
      <th scope="col">Cuenta</th>
      <th scope="col">telefono</th>
      <th scope="col">Email</th>
      <th scope="col">Opción</th>
    </tr>
  </thead>
  <tbody>
  <?php
      foreach ($almacen as $dato){
      ?>
      <tr>
        <td><?php echo $dato->id;?></td>
        <td><?php echo $dato->rfc;?></td>
        <td><?php echo $dato->nombre;?></td>
        <td><?php echo $dato->banco;?></td>
        <td><?php echo $dato->cuenta;?></td>
        <td><?php echo $dato->telefono;?></td>
        <td><?php echo $dato->email;?></td>
        <td><a href="actualizar.php" class="botonopcion">Eliminar</a></td>
        
        

        



      </tr>
      <?php


      }

      ?>
 


  </tbody>
</table>




</section>



  
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


