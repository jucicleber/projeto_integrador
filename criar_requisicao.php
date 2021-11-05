<?php
include_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Criar requisição</title>
</head>

<body>
<h1>Para requisitar um produto preencha os itens abaixo</h1>
    <form method="POST" action="enviar_requisicao.php">
    
    <?php
            
            /* selecionando o cargo */
            $query = "SELECT * from funcionarios";
            
        ?>
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
            
<div class="row">
        <div class="col-6">
            <p class="qtd">Quantidade</p>
            <input class="quantidade col-6" type="text" name="qtd" placeholder="Digite a quantidade ">
        </div>
    </div>



<?php
            /* query para chamar o banc de dados. */
            $query = "SELECT * from produto";
            
        ?>
    <div class="row">
        <div class="col-6">
            <select name="id_produto">
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

    <button type="submit" >Enviar informações</button>


</body>

</html>