<?php
include_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>Para ver os produtos que o funcionário tem em seu nome preecha os campos abaixo:</h1>
<?php
            
            /* selecionando o cargo */
            $query = "SELECT * from funcionarios";
            
        ?>
        <div class="row">
            <div class="col-6">
    <select class="opcoes" name="colaborador">
        <option value="" selected="selected">-- Selecione o colaborador</option>>
        <?php
                if ($result = $conn->query($query)) {
                    while ($row = $result->fetch_row()) {  ?>
        <option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
    

        <?php

                    }
                }

            ?>  
    </select>
            </div>
        </div>
    <button type="submit" >Enviar informações</button>
</body>
</html>