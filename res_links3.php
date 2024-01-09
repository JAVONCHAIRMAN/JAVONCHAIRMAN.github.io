<?php

include "Conexion.php";
$id = $_POST['id2'];
mysqli_query($conexion, "delete from awll where id = ".$id."") or die(mysqli_error($conexion));
header("Location:awll.php");

?>