<?php
include_once("connect.php");
$consulta = "select * from produto";
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        
        <title>Ver saldo</title>
    </head>
    <body>
        <?php
            $l = 5;
            $c = 3;
        ?>
        <h1>
            Estoque produtos epi/roupas/ferramentas!
        </h1>
            <?php 
                echo '<table border="1">';
                $il =1;
                while($il <= $l){
                    echo"<tr>";
                    $ic = 1;
                    while($ic <= $c)
                    {
                    echo "<td>jucicleber</td>";
                    $ic++;
                    }
                    echo "</tr>";    
                    $il++;
                }
                echo"</table>";
            ?>
    </body>
</html>