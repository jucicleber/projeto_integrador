<?php
    include_once("connect.php")
    ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Cadastrar Nota</title>

</head>

<body>
    <h1>Inserir nota no estoque. </h1>
    <h2>Certifique-se que o(s) produto(s) da nota estão cadastrado(s).</h2>

    <?php
            
            /* query para chamar o banc de dados. */
            $query = "SELECT * from produto";
            
        ?>
        <div class="row">
            <div class="col-6">
                <select name="">
                    <option value="" selected="selected">-- Selecione o Produto</option>>
                    <?php
                if ($result = $conn->query($query)) {
                    while ($row = $result->fetch_row()) {  ?>
                    <option value="<?php echo $row[0];?>"><?php echo $row[2];?></option>
                    <?php
                    }
                }

            ?>
                </select>
            </div>
        </div>


    <div class="row">
        <div class="col-6">
            <id>Quantidade</id>
            <input class="nome col-6" type="text" name="nome" placeholder="Digite a quantidade do produto.">
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <id>Número da nota</id>
            <input class="nome col-6" type="text" name="nome" placeholder="Digite o número da nota">
        </div>
    </div>
    <?php
        echo date("d/m/Y H:i");
    ?>
    
</body>

</html>