<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    body{
                background-image:url(../imagens_do_project/fundo.jpg);
                background-attachment:fixed;
                background-size:100%;
            } 
    h1{
        font-family: arial;
        font-size: 70px;
        color: black;
    }
    div{
        font-family: arial;
        font-size: 40px;
        color: red;
    }
    </style>
    <title>Cadastro de Produto</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>
        Cadastre o produto, antes de adicionar a nota no estoque.
    </h1>
    <div class="mb-3 col-6">
        <label for="exampleFormControlInput1" class="form-label">Categoria do Produto</label>
        <input type="text" class="form-control" name="login" placeholder="Digite a categoria do produto ex: epi">
    <div class="mb-3 col-6">
        <label for="exampleFormControlInput1" class="form-label">Nome do produto</label>
        <input type="text" class="form-control" name="login" placeholder="Digite o nome do produto">
    <div class="mb-3 col-6">
        <label for="exampleFormControlInput1" class="form-label">Preço</label>
        <input type="text" class="form-control" name="login" placeholder="Digite o valor pago pelo produto.">
    <div class="mb-3 col-6">
        <label for="exampleFormControlInput1" class="form-label">Marca</label>
        <input type="text" class="form-control" name="login" placeholder="Digite a marca do produto.">
</body>
</html>

