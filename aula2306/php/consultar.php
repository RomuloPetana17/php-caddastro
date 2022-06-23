<?php 
$con = mysqli_connect ("localhost", "root", "", "bd_exemplo");

if (mysqli_connect_errno($con)){

    echo "erro ". mysqli_connect_errno();

}

else{
    
    $sql = "SELECT Nome, Sobrenome, idade From pessoas";

    $resultado =  mysqli_query($con,$sql);

    echo "<h2> pessoa </h2>";

    while($pessoa = mysqli_fetch_array($resultado)){
        echo $pessoa['Nome']. "" .$pessoa['Sobrenome']."<br> <br>";
    } 


    mysqli_close($con);  
}

?>