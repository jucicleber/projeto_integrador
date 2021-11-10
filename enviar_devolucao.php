<?php
include_once("connect.php");
if($_POST){
    $colaborador = $_POST["colaborador"];
    $quantidade = $_POST["qtd"];
    $produto = $_POST["id_produto"];
    $id_requisicao = $_POST["id_requisicao"];

    

    $query = "insert into devolucao(id_funcionario, id_produto, quantidade, id_requisicao) values('{$colaborador}',{$quantidade},'{$produto}',{$id_requisicao})";
    if ($result = $conn->query($query)) {
        $id_requisicao = $conn->insert_id;
        header("Location:mostrar_devolucao.php?id_devolucao=$id_devolucao");
        die();
    
    else{
        echo 'Os dados não conferem com nosso banco de dados!!!';
    }
    }
    else {
        header("location: criar_devolucao.php");
} 