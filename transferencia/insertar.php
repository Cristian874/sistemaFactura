<?php
  if(!isset($_POST['oculto'])){

    exit();

  }

  include'../model/conexion.php';

  $concepto =$_POST['concepto'];
  $importe =$_POST['importe'];

  $iva =$_POST['iva'];
  $poliza =$_POST['poliza'];
  $fecha =$_POST['fecha'];
  $cuenta=$_POST['cuenta'];
  $metodo=$_POST['metodo'];
  

  $sentencia =$bd->prepare("INSERT INTO transferencia(concepto,importe,iva,poliza,fecha,cuenta,metodo) VALUES(?,?,?,?,?,?,?);");
  $resultado = $sentencia->execute([$concepto,$importe,$iva,$poliza,$fecha,$cuenta,$metodo]);



?>