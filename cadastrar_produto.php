<?php
include_once("connect.php");
if($_POST){ 
    $categoria_id = $_POST["categoria_id"]; 
    $nome = $_POST["nome"];
    $marca = $_POST["marca"];

    $query = "insert into produto(categoria_id,nome,marca) values($categoria_id,'{$nome}','{$marca}');";
    $result = $conn->query($query);
  
    if ($result) {
        echo 'Produto cadastrado com sucesso!!!';
    }
    else{
        echo $conn->error;
    }
} 
else {
    header("location: dashboard.php");
}