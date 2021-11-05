<?php
include_once("connect.php");
if($_POST){  
    $colaborador = $_POST["colaborador"]; 
    $quantidade = $_POST["qtd"];
    $produto = $_POST["id_produto"];
    

    $query = "insert into requisicao(id_funcionario,id_produto, quantidade) values('{$colaborador}',{$quantidade},'{$produto}')";

    $query2 = "UPDATE estoque SET qtd = qtd-{$quantidade} WHERE id_produto = {$produto}";
    $maria = $conn->query($query2);

    if ($result = $conn->query($query)) {
        $id_requisicao = $conn->insert_id;
        header("Location:mostrar_requisicao.php?id_requisicao=$id_requisicao");
        die();
    }
    else{
        echo 'Os dados não conferem com nosso banco de dados!!!';
    }
} 
else {
    header("location: solicitacao.php");
}
    