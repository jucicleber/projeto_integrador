<?php
include_once("connect.php");
if ($_POST) {
  $colaborador = $_POST["colaborador"];
  $produto = $_POST["id_produto"];
  $quantidade = $_POST["qtd"];
  $id_requisicao = $_POST["id_requisicao"];


  $verificacao = "select d.id_requisicao, f.nome funcionario, p.nome produto, d.quantidade, d.id_devolucao from devolucao d  
    join funcionarios f on d.id_funcionario = d.id_funcionario 
    join produto p on p.id_produto = d.id_produto
    where d.id_requisicao = $id_requisicao
    and f.id_funcionario = $colaborador";

  $resultVerificacao = $conn->query($verificacao);

  if ($resultVerificacao->num_rows > 0) {

    header("Location:mostrar_devolucao.php?id_requisicao={$id_requisicao}&id_colaborador={$colaborador}");
  }else{
    $query = "insert into devolucao(id_funcionario, id_produto, quantidade, id_requisicao) values('{$colaborador}','{$produto}',{$quantidade},{$id_requisicao})";

    $query2 = "UPDATE estoque SET qtd+{$quantidade} WHERE id_produto = {$produto}";
    if ($result = $conn->query($query)) {
      header("Location:mostrar_devolucao.php?id_requisicao={$id_requisicao}&id_colaborador={$colaborador}");
    } else {
      echo 'Os dados não conferem com nosso banco de dados!!!';
    }
  }
}
