<?php
    session_start();
    include 'conexion.php';
    $Nombre = $_POST["id1"];
    $Contrasena = $_POST["id2"];
    $Result = mysqli_query($conexion,"select id_user, name, password from users where name = md5('".$Nombre."') and password = md5('".$Contrasena."') ") 
    or die(mysqli_error($conexion));
    $registro = mysqli_fetch_array($Result);

    if($registro[0] != 0){

        $_SESSION["Conectado"] = "XEDNyrL8FjaPHn8Gvnda8padXR0U+uCOL+li3XnecO1SrTYy87lobSeYAmAJWrouuNNSSksfGJ+S4aQ4/9BVejTyXRF53gnyp04MITsNSsGnxnAJLkYA0XECHLMy7SfTZLqBMV4ZyoYYiIFv8LlY/Ah0UfcDwOjShi3TbG1wgbQZYo5SXjL/AolZavh4ORwhDwlUeVGzMZv5vlNIMHWVdXyfssjKhVE762Xs/wzn3X8";
        $_SESSION['id_user'] = $registro[0];
        header("Location:main.php");

    } 
   
    else {

        header("Location:index.php");

    }

    exit;  

?>