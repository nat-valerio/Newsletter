<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>
</head>
<body>

    <form action="insert.php" method="post">

    <div>
        <label for="form-email">Email: </label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
    </form>

    <br>
    <hr>

    <a href="select.php">Ver usuários</a>
    <br>
    <a href="enviar-emails.php">Mandar emails</a>
    
</body>
</html>