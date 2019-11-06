<?php
    $arquivo = fopen("emails.txt", "a") or die("Não é possivel encontrar o arquivo");
    
    fclose($arquivo);
?>