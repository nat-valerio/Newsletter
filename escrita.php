<?php
    $email = $_POST['email'];
    
    $arquivo = fopen("emails.txt", "a") or die("Não é possivel encontrar o arquivo");

    $texto = "$email\n";    
    fwrite($arquivo, $texto);

    fclose($arquivo);

    $linha = count(file('emails.txt'));
    echo $linha;

    $arquivo = fopen('emails.txt', "r") or die("Arquivo não encontrado");
    while(!feof($arquivo)){
        echo fgets($arquivo)."<br>";
    }
    fclose($arquivo);

?>