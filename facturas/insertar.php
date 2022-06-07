<?php
  if(!isset($_POST['oculto'])){

    exit();

  }

  include'../model/conexion.php';

  $rfc =$_POST['rfc'];
  $proveedor =$_POST['proveedor'];
  $folio =$_POST['folio'];
  $fecha =$_POST['fecha'];
  $condicion=$_POST['condicion'];
  $fechav=$_POST['fechav'];
  $importeuno=$_POST['importeuno'];
  $importedos=$_POST['importedos'];
  $porcentajeiva=$_POST['porcentajeiva'];
  $importef=$_POST['importef'];
  $notac=$_POST['notac'];
  $importe=$_POST['importe'];
  $descuentouno=$_POST['descuentouno'];
  $descuentodos=$_POST['descuentodos'];
  $ivat=$_POST['ivat'];
  $importep=$_POST['importep'];

  
  

  $sentencia =$bd->prepare("INSERT INTO 
  facturas(rfc,proveedor,foliof,fechaf,condicion,fechav,importeuno,
  importedos,iva,importef,notac,importe,descuentop,descuentoc,ivat,importep)
   VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);");
  $resultado = $sentencia->execute([$rfc,$proveedor,$folio,$fecha,
  $condicion,$fechav,$importeuno,$importedos,$porcentajeiva,$importef,
  $notac,$importe,$descuentouno,$descuentodos,$ivat,$importep]);



?>