<?php
include_once("connect.php");
if($_POST){ 
    $id = $_POST["id"]; 
    $nome = $_POST["nome"];
    $marca = $_POST["marca"];

    $query = "insert into produto(id,nome,marca) values({$id},'{$nome}','{$marca}');";
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