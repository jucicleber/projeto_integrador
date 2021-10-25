<?php
include_once("connect.php");
if($_POST){  
    $colaborador = $_POST["colaborador"]; 
    $quantidade = $_POST["qtd"];
    $produto = $_POST["id_produto"];
    

    $query = "insert into requisicao(id_funcionario,id_produto, quantidade) values('{$colaborador}',{$quantidade},'{$produto}');";
    if ($result = $conn->query($query)) {
        echo 'Solicitação realizada com sucesso!!!';
    }
    else{
        echo 'Os dados não conferem com nosso banco de dados!!!';
    }
} 
else {
    header("location: solicitacao.php");
}
    