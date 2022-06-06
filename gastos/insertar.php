<?php
  if(!isset($_POST['oculto'])){

    exit();

  }

  include'../model/conexion.php';

  $concepto =$_POST['concepto'];
  $importe =$_POST['importe'];

  $iva =$_POST['iva'];
  $poliza =$_POST['poliza'];
  $rfc =$_POST['rfc'];
  $rsocial=$_POST['rsocial'];
  $fecha=$_POST['fecha'];
  $pago=$_POST['pago'];
  $metodo=$_POST['metodo'];

  $sentencia =$bd->prepare("INSERT INTO gastos(concepto,importe,iva,poliza,rfc,rsocial,fecha,pago,metodo) VALUES(?,?,?,?,?,?,?,?,?);");
  $resultado = $sentencia->execute([$concepto,$importe,$iva,$poliza,$rfc,$rsocial,$fecha,$pago,$metodo]);



?>