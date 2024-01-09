<?php
session_start();
include "conexion.php";
error_reporting(E_ERROR | E_PARSE);
?>

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

h4{
    background-color: rgb(207, 207, 207); 
    margin-top: 1%; 
    margin-right: 3%;
    float: right; 
    width: 505px;
    height: 366px; 
    border-style: GROOVE; 
    border-radius: 1.5%; 
    border-color: rgb(255, 94, 0);
}

.imgT2{
  height: 85px;
  width: 300px;
  margin-left: 15%;
  margin-top: 2%;
  margin-bottom: 2%;
  border-radius: 5%;
}

.butonF {
    background-color: rgb(255, 255, 255);
    height: 62px;
    box-shadow: 0px 0px 3px rgb(0, 0, 0); 
    margin-left: 5%; 
    margin-top: 3%;
    border-color: orangered; 
    border-style: solid; 
    border-radius: 12%; 
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    width: 110px;
  }

 .butonF:hover{
    background-color: orangered;
    color: white;
    border-color: white; 
    cursor: pointer;
 }


 .inputI{
    width: 332px; 
    height: 34px; 
    margin-left: 15%; 
    margin-top: 2%;
  }

.form1{
    background-color: white;
    margin-left: 2%;
    margin-right: 2%; 
    margin-bottom: 0%; 
    margin-top: 3%;
    border-style: solid; 
    border-color: white;
  }

  .form2{
    display: none;  
    background-color: white; 
    margin-left: 2%; 
    margin-right: 2%; 
    margin-top: 3%; 
    border-style: solid;
    border-color: white;
  }

  .inputA{
      width: 150px;
      height: 50px;
      margin-left: 15%;
      margin-bottom: 5%;
      border-color: orangered; 
      border-style: solid; 
      margin-top: 3%; 
      background-color: rgb(255, 255, 255);
    }

    .inputA:hover{
      background-color: orangered;
      color: white;
      border-color: white; 
      cursor: pointer;
   }

.imgH{
    height: 460px;
    width: 700px;
    margin-top: 1%;
    margin-left: 2%; 
    margin-bottom: 2%;
}

h5{
    border-color: orangered; 
    border-style: solid; 
    border-radius: 1%; 
    margin-left: 5%; 
    margin-right: 5%; 
}

.imgC{
    height: 120px; 
    width: 150px; 
    border-radius: 2%; 
    border-color: rgb(212, 212, 212); 
    border-style: outset; 
    margin-left: 4%; 
    margin-top: 2%;
    margin-bottom: 2%;
}

.imgC:hover{
    border-color: rgb(255, 187, 0); 
    border-style: groove; 
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

.imgH{
    height: 250px;
    width: 360px;
    margin-left: 6%;
    margin-bottom: 3%;
}

h1{
    background-color: rgb(187, 187, 187);
    margin-bottom: 0%;
    margin-top: 0%;
    height: 55px;
    border-color: rgb(255, 163, 57); 
    border-style: outset; 
}

h4{
    background-color: rgb(207, 207, 207); 
    margin-top: 0.1%; 
    margin-bottom: 0%; 
    float: left; 
    width: 365px;
    height: 330px; 
    border-style: GROOVE; 
    border-radius: 1.5%; 
    border-color: rgb(255, 94, 0);
    margin-left: 1.5%;
}

.butonF {
    background-color: rgb(255, 255, 255);
      height: 62px;
      box-shadow: 0px 0px 3px rgb(0, 0, 0);
      margin-left: 14%;
      margin-top: 1.5%;
      border-color: orangered;
      border-style: solid;
      border-radius: 12%;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      width: 110px;
    }

    .butonF:hover{
      background-color: orangered;
      color: white;
      border-color: white;
      cursor: pointer;
   }

 .inputI{
    width: 280px; 
    height: 28px; 
    margin-left: 5%; 
    margin-top: 2.5%;
  }

  .inputA{
      width: 150px;
      height: 50px;
      margin-left: 15%;
      margin-bottom: 5%;
      border-color: orangered; 
      border-style: solid; 
      margin-top: 3%; 
      background-color: rgb(255, 255, 255);
    }

    .inputA:hover{
      background-color: orangered;
      color: white;
      border-color: white; 
      cursor: pointer;
   }

.form1{ 
    background-color: white;
    margin-left: 2%;
    margin-right: 2%; 
    margin-bottom: 0%; 
    margin-top: 3%;
    border-color: orangered;
      border-style: solid;
  }

  .form2{
    display: none;  
    background-color: white; 
    margin-left: 2%; 
    margin-right: 2%; 
    margin-top: 5%;
    margin-bottom: 0%; 
    border-color: orangered;
      border-style: solid;
  }

.imgC{
    height: 250px; 
    width: 337px; 
    border-radius: 2%; 
    border-color: rgb(212, 212, 212); 
    border-style: outset; 
    margin-left: 5%; 
    margin-top: 10%;
    margin-bottom: 2%;
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/logo_javon.png">
    <title>javon_webpage/javon_awll_service</title>
</head>

<script>
    function mostrarForm1() {
    var form1 = document.getElementById("form1").style.display = 'block';
    document.getElementById("form2").style.display = 'none';
     document.getElementById("form3").style.display = 'none';
    } 
 </script> 
  </script>
 <script>
     function mostrarForm2() {
     var form1 = document.getElementById("form2").style.display = 'block';
     document.getElementById("form1").style.display = 'none';
     document.getElementById("form3").style.display = 'none';
     } 
  </script>

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

    <img class="imgH" src="img/información_sobre_categorias_ingles.png" alt="">

    <h4>
        <button class="butonF" onclick="mostrarForm1();">Add new link</button>
        <button class="butonF" onclick="mostrarForm2();">Save link</button>

        <form class="form1" id="form1" action="res_cl.php" method="POST" enctype="multipart/form-data">
            <input class="inputI" type="text" name="url1" placeholder="LINK OR URL:"><br>
            <input class="inputI" type="text" name="nombre1" placeholder="NAME:"><br>           
            <input class="inputI" type="number" name="category" placeholder="LINK CATEGORY:"><br>           
            <input class="inputI" type="file" id='Imagen1' name='Imagen1' placeholder="IMAGE:"><br>
            <input class="inputA" id='boton1' type="submit" value="Safe new Link"><br>
        </form><br>

        <form class="form2" id="form2" action="res_cl2.php" method="POST" action="res_links2.php" enctype="multipart/form-data">
            <input class="inputI" type="text" name="url2" placeholder="LINK OR URL:"><br>
            <input class="inputI" type="text" name="nombre2" placeholder="NAME:"><br>           
            <input class="inputI" type="file" id='Imagen1' name='Imagen1' placeholder="IMAGE:"><br>
            <input class="inputA" id='boton2' type="submit" value="Safe changes"><br>
        </form><br>
    </h4>

    <h5>
    <?php
  
            $registro = mysqli_query($conexion, "select url, img, name from awll_cl order by id asc") 
            or die(mysqli_error($conexion));
            while ($datos = mysqli_fetch_array($registro)) {
              $url = $datos[0];
              $img = $datos[1];
              $name = $datos[2];

              echo "<a href='$url' target='_blank'><img class='imgC' src='$img'></a>";

            }
    ?>  
    </h5>

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