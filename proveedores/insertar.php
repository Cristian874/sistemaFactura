<?php
  if(!isset($_POST['oculto'])){

    exit();

  }

  include'../model/conexion.php';

  $rfc =$_POST['txtrfc'];
  $nombre =$_POST['txtnombre'];

  $banco =$_POST['txtbanco'];
  $cuenta =$_POST['txtcuenta'];
  $telefono =$_POST['txttel'];
  $email =$_POST['txtemail'];

  $sentencia =$bd->prepare("INSERT INTO proveedores(rfc,nombre,banco,cuenta,telefono,email) VALUES(?,?,?,?,?,?);");
  $resultado = $sentencia->execute([$rfc,$nombre,$banco,$cuenta,$telefono,$email]);
  if(resultado!=0; resultado++;){

    location("registro.php")
  }
  else{
    echo("error");
    header_location('insertar.php')
  }




?>