<?php

function conexion(){

    $host='localhost';
    $user='root';
    $pass='';
    $db='vencedora';

    $conexion=mysqli_connect($host,$user,$pass,$db);

    return $conexion;
    
    
}


?>