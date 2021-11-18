<?php
include_once("connect.php");
if($_POST){
    $colaborador = $_POST["colaborador"];
    $produto = $_POST["id_produto"];
    $quantidade = $_POST["qtd"]; 
    $id_requisicao = $_POST["id_requisicao"];

    

    $query = "insert into devolucao(id_funcionario, id_produto, quantidade, id_requisicao) values('{$colaborador}','{$produto}',{$quantidade},{$id_requisicao})";

    $query2 = "UPDATE estoque SET qtd = qtd+{$quantidade} WHERE id_produto = {$produto}";
    if ($result = $conn->query($query)) {
        header("Location:mostrar_devolucao.php");
    }
    else{
        echo 'Os dados não conferem com nosso banco de dados!!!';
        
    }
}
