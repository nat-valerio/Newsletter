<?php

    //Alterar aqui!!

    if($resultado->num_rows > 0){
        while($linha = $resultado->fetch_assoc()){
            echo "<tr>";
                echo "<td>". $linha['email'] . "</td>";
                echo "<td><a href='postform.php?id= ".$linha['id']. "'>Editar </a> | ";
                echo "<a href='delete.php?id=" . $linha['id'] . "'>Apagar</a></td>";
            echo "</tr>";
        }
    }else{
        echo "Nenhum resultado";
    }
?>