<?php

    include('conn.php');
   
    $email = $_GET['email'];

    $sql = "INSERT INTO Pessoas (email) VALUES ('$email')";

    if($conn->query($sql) == TRUE){
        echo "Dado inserido com sucesso!";
    }else{
        echo "Erro: ". $conn->error;
    }

    $conn->close();