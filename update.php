<?php

    include('conn.php');

    $email = $_POST['email'];

    $sql = "UPDATE Pessoas SET email='$email' WHERE id=''";

    $conn->query($sql);

    $conn->close();

    header('Location: select.php');