<?php
//Configuracion para accedar ala BD
function conn(){
    $hostname = "localhost";
    $usuariodb = "root";
    $passworddb = "";
    $bdname = "sistemas";

    //gnerando conexion con el servidor

    $conectar =  mysqli_connect($hostname, $usuariodb, $passworddb, $bdname);
    return $conectar;
}

?>