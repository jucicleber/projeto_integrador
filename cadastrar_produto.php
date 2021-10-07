<?php
include_once("connect.php");
if($_POST){ 
    $categoria_id = $_POST["categoria_id"]; 
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $marca = $_POST["marca"];

   $query = "insert into produto(categoria_id,nome,preco,marca) values({$categoria_id},'{$nome}',{$preco},'{$marca}');";
    $result = $conn->query($query);
    if ($result) {
        echo 'Produto cadastrado com sucesso!!!';
    }
    else{
        echo 'Produto não cadastrado!!!';
    }
} 
else {
    header("location: dashboard.php");
}