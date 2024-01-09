<?php

include "conexion.php";
$nombre_usuario = $_POST['id1'];
$contrasenia = $_POST['id2'];
mysqli_query($conexion, "insert into users (name, password) values ( md5('".$nombre_usuario."'), md5('".$contrasenia."'))") 
or die(mysqli_error($conexion));
header("Location:users.php");

?>