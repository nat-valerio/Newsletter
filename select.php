<?php
    include('conn.php');

    $sql = "SELECT * FROM Pessoas";
    $resultado = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pessoas</title>
    <style>
    table, tr, th{
        border: 2px solid black;
        border-collapse: collapse;
    }
    tr, th{
            padding: 5px;
    }
    th{
        background-color: #99ddff;
        color: black;
    }
    </style>
</head>
<body>

    <h1>Emails cadastrados</h1>
    <table>
    <tr>
        <th>Email</th>
    </tr>
        <?php include('criarlinha.php')?>
    </table>
    
</body>
</html>

<?php
    $conn->close();
?>