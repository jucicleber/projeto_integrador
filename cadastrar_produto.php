<?php
include_once("connect.php");
if($_POST){  
    $categoria_id = $_POST["categoria_id"]; 
    $nome = $_POST["nome"];
    $preço = $_POST["preço"];
    $marca = $_POST["marca"];

    $query = "insert into produto(categoria_id,nome,preço,marca) values('{$categoria_id}','{$nome}',{$preço},{$marca});";
    if ($result = $conn->query($query)) {
        echo 'Produto cadastrado com sucesso!!!';
    }
    else{
        echo 'Produto não cadastrado!!!';
    }
} 
else {
    header("location: dashboard.php");
}