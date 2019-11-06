<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abrir leitura</title>
</head>
<body>

    <?php 
        $arquivo = fopen("emails.txt", "r") or die("Arquivo não encontrado");
        echo fgets($arquivo, filesize("email.txt"));
        fclose($arquivo);
    ?>
    
</body>
</html>