<?php
    session_start();
    include "conexion.php";
    error_reporting(E_ERROR | E_PARSE);

	ini_set("memory_limit", "300M");
	ini_set("upload_max_filesize", "100M");
	ini_set("post_max_size", "150M"); 
	ini_set("max_execution_time"," 500");
	ini_set("max_input_time", "500");
	set_time_limit(0);

    
    $tamanio = $_FILES["Imagen1"]['size'];
    $tipo = $_FILES["Imagen1"]['type'];
    $imagenes = $_FILES["Imagen1"]['name'];
    $url = $_POST['url2'];
    $nombre = $_POST['nombre2'];

    $Imagen =  "./links_img/".$imagenes;

    if (!move_uploaded_file($_FILES['Imagen1']['tmp_name'], $Imagen)) {
        header("Location:awll.php");
        exit;
    }

    
    mysqli_query($conexion, "insert into awll (name, url, img, users) values 
    ( '$nombre','$url', '$Imagen', '".$_SESSION['id_user']."')") 
    or die(mysqli_error($conexion));
    header("Location:awll.php");

?>