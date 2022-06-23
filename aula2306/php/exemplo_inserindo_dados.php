<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário Inserindo dados em uma tabela</title>
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

        <form action="inserir_dados.php" method="POST">

        Nome: <input type="text" name="nome"> <br><br>

        Sobrenome: <input type="text" name="sobrenome"> <br><br>

        Idade: <input type="text" name="idade"> <br><br>


        <input type="submit" value="Enviar">

        </form>

 


</nav> <!--Backgroundwhite--->

</div> <!--Container--->

</body>
</html>