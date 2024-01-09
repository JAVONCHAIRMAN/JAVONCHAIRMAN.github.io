<style>
  /*Máxima pantalla*/
@media (min-width: 1000px) {

    header{
        background-color: rgb(255, 255, 255);
        height: 294px;
        border-style: inset;
        border-color: orangered;
        margin-top: 0%;
    }

    .imgT{
        height: 170px;
        width: 600px;
        margin-left: 7%;
        margin-top: 1%;
    }

    p{
        height: 95px;
        margin-top: 1%;
        margin-bottom: 0%;
        background-color: orangered;
    }

    .iB{
        height: 60px;
        width: 115px;
        border-style: inset;
        border-color: rgb(138, 138, 138);
        border-radius: 6%;
        margin-top: 1%;
        margin-left: 3%;
    }

    .iB:hover{
        border-color: rgb(255, 255, 255);
        box-shadow: 15%;
    }

    body{
        margin: 0%;
    }

    h1{
        height: 511px;
        width: 830px;
        border-radius: 2%;
        border-color: rgb(212, 212, 212);
        border-style: outset;
        margin-left: 19%;
        margin-top: 1.7%;
        margin-bottom: 2%;
    }

    h1:hover{
        border-color: rgb(255, 174, 0);
        border-style: groove;
    }

    .iI{
        height: 510px;
        width: 829px;
        border-radius: 2%;
    }

    footer{
        background-color: orangered;
        height: 420px;
        margin-top: 5%;
    }  

    h2{
        background-color: rgb(255, 176, 0);
        height: 15px;
        padding-bottom: 0%;
        margin-bottom: 0%;
        margin-top: 0.1%;
    }

    h3{
        font-family: Arial, Helvetica, sans-serif;
        color: rgb(255, 255, 255);
        margin-left: 5%;
        font-size: 20px;
        margin-top: 1%;
        margin-bottom: 0%;
    }

    .iF1{
        width: 60px;
        height: 60px;
        margin-left: 3%;
        margin-top: 0%;
    }

    .iF2{
        width: 80px;
        height: 60px;
        margin-left: 5%;
        margin-top: 1.5%;
    }

}

/*Mínima pantalla*/
@media (max-width: 999px) {

    header{
  background-color: rgb(255, 255, 255);
  height: 297px;
  border-style: inset;
  border-color: orangered;
  margin-top: 0%;
  margin-bottom: 1%;
}

.imgT{
  height: 100px;
  width: 300px;
  margin-left: 9.5%;
  margin-top: 1%;
}

p{
  height: 190px;
  margin-top: 1%;
  margin-bottom: 0%;
  background-color: orangered;
}

    .iB{
        height: 60px;
        width: 80px;
        border-style: inset;
        border-color: rgb(138, 138, 138);
        border-radius: 6%;
        margin-top: 5%;
        margin-left: 7%;
    }
  
    .iB:hover{
        border-color: rgb(255, 255, 255);
        box-shadow: 15%;
    }

    body{
        margin: 0%;
    }

    h1{
        height: 290px;
        width: 343px;
        border-radius: 2%;
        border-color: rgb(212, 212, 212);
        border-style: outset;
        margin-top: 1.7%;
        margin-bottom: 2%;
        margin-left: 5%;
    }

    .iI{
        height: 290px;
        width: 342.5px;
        border-radius: 2%;
    }

    footer{
        background-color: orangered;
        height: 350px;
        margin-top: 5%;
    }  

    h2{
        background-color: rgb(255, 176, 0);
        height: 15px;
        padding-bottom: 0%;
        margin-bottom: 0%;
        margin-top: 0.1%;
    }

    h3{
        font-family: Arial, Helvetica, sans-serif;
        color: rgb(255, 255, 255);
        margin-left: 5%;
        font-size: 10px;
        margin-top: 1%;
        margin-bottom: 0%;
    }

    .iF1{
        width: 60px;
        height: 60px;
        margin-left: 3%;
        margin-top: 0%;
    }

    .iF2{
        width: 65px;
        height: 50px;
        margin-left: 5%;
        margin-top: 1.5%;
    }

}
</style>

<?php
session_start();
include "conexion.php";
if(!isset($_SESSION["Conectado"]) or $_SESSION["Conectado"] != "XEDNyrL8FjaPHn8Gvnda8padXR0U+uCOL+li3XnecO1SrTYy87lobSeYAmAJWrouuNNSSksfGJ+S4aQ4/9BVejTyXRF53gnyp04MITsNSsGnxnAJLkYA0XECHLMy7SfTZLqBMV4ZyoYYiIFv8LlY/Ah0UfcDwOjShi3TbG1wgbQZYo5SXjL/AolZavh4ORwhDwlUeVGzMZv5vlNIMHWVdXyfssjKhVE762Xs/wzn3X8"){   
  header("location:index.php");
  exit;
}
error_reporting(E_ERROR | E_PARSE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/logo_javon.png">
    <title>javon_webpage/main_blog</title>
</head>
<header>   
    <img class="imgT" src="img/2.png" name="imgHeaderIndex">
    <p>
        <a href="info.php"><img class="iB" src="img/4.png" title="webpage and services information page"></a>
        <a href="entertainment.php"><img class="iB" src="img/5.png" title="entertainment page"></a>
        <a href="community_library.php"><img class="iB" src="img/awll_community.png" title="AWLL cloud services"></a>
        <a href="awll.php"><img class="iB" src="img/awll_private.png" title="AWLL comunity program"></a>
        <a href="downloads.php"><img class="iB" src="img/9.png" title="products and programs for download"></a>
        <a href="main.php"><img class="iB" src="img/10.png" title="main blog"></a>
    </p>
</header>
<body>

    <h1>
        <img class="iI" src="img/a1.png">
    </h1>
     <h1>
        <img class="iI" src="img/a2.png">
    </h1>
    <h1>
        <img class="iI" src="img/a3.png">
    </h1>
    <h1>
        <img class="iI" src="img/a4.png">
    </h1>
    <h1>
        <img class="iI" src="img/a5.png">
    </h1>
    <h1>
        <img class="iI" src="img/a6.png">
    </h1>
    <h1>
        <img class="iI" src="img/a7.png">
    </h1>
    <h1>
        <img class="iI" src="img/a8.png">
    </h1>
    
</body>
<footer>
    <h2></h2><br>

    <img class="iF1" src="img/javon_logo.png">
    <h3>
        JAVON's website is the main webpage of JAVON brand, where JAVON shows its products, 
        services and news. 
    </h3><br>
    <h3>
        AWLL programs, its services and other products and services are properti of 
        JAVON brand.
    </h3><br>
    <h3>
        Credits of the development of the page: Adrián matute Corrales (chairman and 
        creator of the brand).
    </h3><br>
    <h3>
        You can contact our tecnics for products, services or problems with any of 
        JAVON social medias.
    </h3><br>

    <a href="https://instagram.com/javon_ofi?igshd=MzRIODBiNWFIZA==">
        <img class="iF2" src="img/insta.png">
    </a>
    <a href="https://www.facebook.com/profile.php?id=100076754186451&mibextid=ZbWKwL">
        <img class="iF2" src="img/face.png">
    </a>
    <a href="https://chat.whatsapp.com/CNRZYMXGLEaFBAcwQg2stO">
        <img class="iF2" src="img/wtas.png">
    </a>
    <a href="https://twitter.com/JavonPodca44400?s=20">
        <img class="iF2" src="img/twt.png">
    </a><br>
</footer>
</html>