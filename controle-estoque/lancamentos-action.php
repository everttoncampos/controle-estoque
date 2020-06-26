<?php
require ("Produto.class.php");
require ("config.php");

$p = new Produto();

date_default_timezone_set('America/Cuiaba');

$id = filter_input(INPUT_POST, 'id');
$operacao = filter_input(INPUT_POST, 'operacao');
$qntInserida = intval(filter_input(INPUT_POST, 'qntInserida'));
$item = $p->getItem($id);

$medico = filter_input(INPUT_POST, 'medico');


if ($operacao === "1") {

  $qntItemAtual = intval($item['qnt']) + $qntInserida;

  $pdo->query("UPDATE estoque SET qnt = '".$qntItemAtual."' WHERE id = $id");  

  $sql = "INSERT INTO relatorio (id_usuario, operacao, produto, qntOperacao, qntAtual, medico, datatime) VALUES (:id_usuario, :operacao, :produto, :qntOperacao, :qntAtual, :medico, CURRENT_TIMESTAMP)";
  
  $sql = $pdo->prepare($sql);
  $sql->bindValue(":id_usuario", $id);  
  $sql->bindValue(":operacao", $operacao);  
  $sql->bindValue(":produto", $item['produto']);  
  $sql->bindValue(":qntOperacao", $qntInserida);  
  $sql->bindValue(":qntAtual", $qntItemAtual);  
  $sql->bindValue(":medico", ""); 
  $sql->execute();

  $sql->closeCursor();

  header("Location: index.php");

} else {

  if ($medico) {

    $qntItemAtual = intval($item['qnt']) - $qntInserida;

    $pdo->query("UPDATE estoque SET qnt = '".$qntItemAtual."' WHERE id = $id");  

    $sql = "INSERT INTO relatorio (id_usuario, operacao, produto, qntOperacao, qntAtual, medico, datatime) VALUES (:id_usuario, :operacao, :produto, :qntOperacao, :qntAtual, :medico, CURRENT_TIMESTAMP)";
    
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":id_usuario", $id);  
    $sql->bindValue(":operacao", $operacao);  
    $sql->bindValue(":produto", $item['produto']);  
    $sql->bindValue(":qntOperacao", $qntInserida);  
    $sql->bindValue(":qntAtual", $qntItemAtual);  
    $sql->bindValue(":medico", $medico); 
    $sql->execute();

    $sql->closeCursor();

    header("Location: index.php");

  } else {

    echo "selecione qual médico";

    header("Location: index.php");

  }

}
