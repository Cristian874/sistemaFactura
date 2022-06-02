<?php
function connectDB(){
    $server = "localhost"; //sobraba un espacio
    $user = "root";     //tenía una $ dentro
    $pass = "";   //tenía una $ dentro y... ¿lleva dos oo?
    $bd = "sistema-facturas";  //poner datos reales en todo esto


       if (!($link = mysqli_connect($serve,$user,$pass,$bd))){
        echo "error de conexión: " . mysqli_connect_error() . PHP_EOL;
        exit();
    }
    
    return $link;
    echo"exito de conexion
     ";
}


?>
