<?php
include_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <title>Planilha de Estoque</title>
        <style>
        h1. {
            font-size: 70px;
            color: black;
        }
        </style>
</head>

<body>
    <h1>Estoque Ativo Chácara São João!!!</h1>


    <table class="table table-light table-bordered border-dark">
        <thead>
            <tr>
                <th scope="col">Quantidade</th>
                <th scope="col">Produto</th>
                <th scope="col">Categoria</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            /* query para chamar o banc de dados. */
            $query = "select e.qtd, p.nome as produto, c.nome as categoria
            from estoque e 
            left join produto p on (p.id_produto = e.id_produto)
            left join categorias c on (c.categoria_id = p.categoria_id)";
            if ($result = $conn->query($query)) {
            while ($mostra_estoque = $result->fetch_row()) {?>
            <tr>
                <th scope="row"><?php echo $mostra_estoque[0] ?></th>
                <td><?php echo $mostra_estoque[1] ?></td>
                <td><?php echo $mostra_estoque[2] ?></td>
            </tr>
            <?php } 
        }?>

        </tbody>
    </table>
</body>

</html>