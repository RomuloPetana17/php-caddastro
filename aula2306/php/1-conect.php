<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário - POST</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>


        #Container {
            padding: 2%;
            text-align: left;
            background-color: lightblue;
            border: 3px solid black;
            width: 100%;
            height: 2000px;
            
        }

        button{

            border: 2px solid black;
            padding: 10px;
            margin-left: 1.5%;

        }

        .cad{

            margin: 1.5%;
            padding: 1%;
            border: 2px solid black;

        }

        .imagecenter{
            margin-left: 25%;
        }
        

    </style>

</head>
<body>

<div id="Container">

<nav class="cad" style="background-color: whitesmoke;">

<?php

//Criando conexão com o banco de dados

$con = mysqli_connect("localhost", "root", "bd_exemplo");


    //Checar conexão

    if (mysqli_connect_errno()) {
        
        echo "<div class='alert alert-danger' role='alert'>
        Erro ao conctar a base de dados: 
      </div>";


        mysqli_connect_error();

    }
     else {
        echo "<h1> <img src= 'imagens/open-exit-door.png'>  <b>Conexão Aberta</h1></b> <br>";
       echo "<img src='imagens/welcome.gif'>";
    
    mysqli_close($con);

    }

?>   

</nav> <!--Backgroundwhite--->

</div> <!--Container--->

</body>
</html>


