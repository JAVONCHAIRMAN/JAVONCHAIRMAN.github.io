<?php

include "Conexion.php";
$id = $_POST['id2'];
mysqli_query($conexion, "select url, img from awll_cl where id = ".$id."") or die(mysqli_error($conexion));
header("Location:awll_cl.php");

?>