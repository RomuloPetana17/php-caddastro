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

        button {

            border: 2px solid black;
            padding: 10px;
            margin-left: 1.5%;

        }

        .cad {

            margin: 1.5%;
            padding: 1%;
            border: 2px solid black;

        }

        .imagecenter {
            margin-left: 25%;
        }
    </style>

</head>

<body>

    <?php
    $con = mysqli_connect("localhost", "root", "", "pessoas"); // Erro constante nno login, revisar.

    if (mysqli_connect_errno()) {

        echo "Erro: " . mysqli_connect_error();
    } else {
        $sql = "INSERT INTO Pessoa VALUES ('$_POST[nome]','$_POST[sobrenome]','$_POST[idade]')";

        if (mysqli_query($con, $sql)) {

            echo "Pessoa inserida com sucesso!!!";
        } else {

            echo "Erro ao inserir: ".mysqli_error($con);
        }

        mysqli_close($con);
    }

    ?>

</body>

</html>