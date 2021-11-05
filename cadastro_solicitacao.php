<?php
include_once("connect.php");
if($_POST){  
    $nome = $_POST["nome"]; 
    $email = $_POST["email"];
    $matricula = $_POST["matricula"];
    $cargo = $_POST["cargo"];

    $query = "insert into solicitacao(nome,email,matricula,cargo_id) values('{$nome}','{$email}',{$matricula},{$cargo});";
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
    