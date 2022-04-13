<?php

include_once('db.php');
//recibo datos de formulario a las variables
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

echo "los datos son los siguetntes: <br>";
echo "$nombres,$apellidos,$direccion,$telefono,$usuario y $clave";

$conectar=conn();//eejcutar las conecionde de la Bd
$sql= "INSERT INTO `usuarios` (`nombres`, `apellidos`, `direccion`, `telefono`, `usuario`, `clave`) VALUES ('$nombres', '$apellidos', '$direccion', '$telefono', '$usuario', '$clave')";
$reult = mysqli_query($conectar , $sql)or trigger_error("querry Failed¡ SQL - ERROR: ".mysqli_error($conectar), E_USER_ERROR);
echo "$sql";

?>