<?php
include_once("connect.php");
if($_POST){ 
    $id_produto = $_POST["id_produto"]; 
    $qtd = $_POST["qtd"];
    $num_nota = $_POST["num_nota"];
    $entrada_nota = $_POST["entrada_nota"];

    $query = "insert into estoque (id_produto, qtd, num_nota, data_entrada) values 
    ($id_produto, $qtd, $num_nota, '$entrada_nota');";
    $result = $conn->query($query);

    if ($result) {
        echo 'Produto registrado no estoque com sucesso!!!';
    }
    else{
        echo $conn->error;
    }
} 
else {
    header("location: dashboard.php");
}