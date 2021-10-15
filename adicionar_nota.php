<?php
    include_once("connect.php")
    ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <style>
        body{
            background-image: url(../imagens_do_project/imagem3.jpg );
            background-attachment: fixed;
            background-size: 100%;
        }
        .qtd, .num_nota{
            font-size: 40px;
            color: black;
        }
    </style>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
      
    <title>Cadastrar Nota</title>

</head>
    

<body>
    <h1>Inserir nota no estoque. </h1>
    <h2>Certifique-se que o(s) produto(s) da nota esta(o) cadastrado(s).</h2>
    <h3>Independete de quantos produtos tem na nota, favor cadastrar um produto por vez.</h3>
    <form method="POST" action="ver_estoque.php">
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
            <p class="qtd">Quantidade</p>
            <input class="nome col-6" type="text" name="nome" placeholder="Digite a quantidade do produto.">
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <p class="num_nota">Número da nota</p>
            <input class="nome col-6" type="text" name="nome" placeholder="Digite o número da nota">
        </div>
    </div>
    <?php
        
        echo date("d/m/Y H:i");
    ?>
    <div class="row">
        <div class="col-6">
            <input type="submit" value="Enviar informações">
        </div>
    </div>
</body>

</html>