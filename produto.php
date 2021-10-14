<?php
include_once("connect.php");

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
    body {
        background-image: url(../imagens_do_project/imagem3.jpg );
        background-attachment: fixed;
        background-size: 100%;
    }

    h1,
    h5 {
        font-size: 70px;
        color: black;
    }

    h3,
    h6 {
        font-size: 40px;
        color: red;
    }

    button {
        font-size: 30px;
        color: red;
    }

    li,
    h7 {
        font-size: 20px;
        color: red;
    }
    </style>

</head>

<body>
    <h1>Cadastrar Produto no estoque</h1>

    <h5>Por favor, cadastrar o produto antes de entrar com a nota no estoque.</h5>
        <form method="POST" action="cadastrar_produto.php">

        <?php
            
            /* query para chamar o banc de dados. */
            $query = "SELECT * from categorias";
            
        ?>
        <div class="row">
            <div class="col-6">
                <select name="id">
                    <option value="" selected="selected">-- Selecione a categoria</option>>
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

        <div class="row">
            <div class="col-6">
                <h3> Nome</h3>
                <input class="nome col-6" type="text" name="nome" placeholder="Digite o nome do produto.">
            </div>
        </div>

        <div class="row">
            <div class="col-6">
        <h6> Marca</h6>
        <input class="marca col-6" type="text" name="marca" placeholder="Digite a marca do produto.">
        </div>
            </div>

        <div class="row">
                <div class="col-6">
                    <input type="submit" value ="Enviar informações">      
                </div>
            </div>
        
    </form>
</body>

</html>