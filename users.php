<style>
/*Máxima pantalla*/
@media (min-width: 1000px) {

    header{
        background-color: rgb(255, 255, 255);
        height: 190px;
        border-style: inset;
        border-color: orangered;
        margin-top: 0%;
    }

    body{
        background: url(img/portada.png);
        background-size: cover;
        margin: 0%;
    }

    .imgT{
        height: 150px;
        width: 530px;
        margin-left: 7%;
        margin-top: 1%;
    }

    p{
        height: 11px;
        margin-bottom: 0%;
        background-color: orangered;
    }

    form{
        background-color: white;
        width: 430px;
        height: 270px;
        border-style: inset;
        border-color: rgb(255, 167, 51);
        border-radius: 6%;
        margin-top: 3%;
        margin-left: 18%;
        margin-bottom: 1%;
    }

    .imgUser{
        width: 250px;
        height: 100px;
        margin-top: 2%;
        margin-left: 20%;
    }

    .iB{
        height: 105px;
        width: 205px;
        border-style: inset;
        border-color: orangered;
        border-radius: 6%;
        margin-top: 6%;
        margin-left: 24%;
    }

    .iB:hover{
        border-style: groove;
        border-color: rgb(255, 166, 0);
    }

    .inputI{
        width: 332px;
        height: 28px;
        margin-left: 12%;
        margin-top: 1%;
    }

    .inputA{
        width: 150px;
        height: 40px;
        margin-top: 3%;
        margin-left: 40%;
        margin-right: 5%;
        margin-bottom: 1.5%;
        border-style: inset;
        border-color: orangered;
    }

    .inputA:hover{
        background-color: orangered;
        color: white;
        border-color: rgb(255, 145, 0);

    }

    button{
        width: 120px;
        height: 50px;
        margin-top: 7%;
        margin-left: 52%
    }

    .crearUsuario{
       margin-left: 15%;
    }

    .info{
        margin-left: 3%;
    }

    footer{
        background-color: orangered;
        height: 10px;
        margin-top: 11%;
    }

}


/*Mínima pantalla*/
@media (max-width: 999px) {

    header{
        background-color: rgb(255, 255, 255);
        height: 162px;
        border-style: inset;
        border-color: rgb(255, 90, 0);
        margin-top: 0%;
        
    }

    .imgT{
        height: 115px;
        width: 300px;
        margin-left: 7%;
        margin-top: 1%;
    }

    p{
        height: 35px;
        margin-top: 1%;
        margin-bottom: 0%;
        background-color: rgb(255, 90, 0);
    }

    body{
        margin: 0%;
    }

    form{
        width: 350px;
        height: 410px;
        border-style: inset;
        border-color: rgb(255, 94, 0);
        border-radius: 6%;
        margin-top: 26%;
        margin-left: 3%;
        margin-bottom: 3%;
    }

    .imgUser{
        width: 300px;
        height: 100px;
        margin-top: 4%;
        margin-left: 7%;
    }

    .iB{
        height: 115px;
        width: 200px;
        border-style: inset;
        border-color: rgb(255, 94, 0);
        border-radius: 6%;
        margin-top: 6%;
        margin-left: 20%;
    }

    .inputI{
        width: 300px;
        height: 50px;
        margin-left: 5%;
        margin-top: 6%;
    }

    .inputA{
        width: 150px;
        height: 60px;
        margin-top: 5%;
        margin-left: 27%;
        margin-right: 5%;
        margin-bottom: 1.5%;
        border-style: inset;
        border-color: orangered;
    }

    button{
        width: 120px;
        height: 50px;
        margin-top: 7%;
        margin-left: 52%
    }

    .crearUsuario{
       margin-left: 15%;
    }

    .info{
        margin-left: 3%;
    }

    footer{
        background-color: rgb(255, 90, 0);
        height: 100px;
        margin-top: 21.5%;
    }


}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>javon_webpage</title>
    <link rel="icon" type="image/png" href="img/logo_javon.png">
</head>
<header>   
    <img class="imgT" src="img/2.png" name="imgHeaderIndex">
    <p></p>
</header>
<body>
    <form action="res_agregar_usuarios.php" method="POST">
        <img class="imgUser" src="img/create_users.png">
        <input class="inputI" type="text" name="id1" placeholder="Create your user name:"><br>
        <input class="inputI" type="tetx" name="id2" placeholder="Create your password:"><br>
        <input class="inputA" id='boton3' type="submit" value="Create user">
    </form>
</body>
</html>