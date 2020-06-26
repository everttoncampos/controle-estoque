<?php
require ('config.php');

$produto = filter_input(INPUT_POST, 'produto');
$marca = filter_input(INPUT_POST, 'marca');
$tamanho = filter_input(INPUT_POST, 'tamanho');
$estoqueFinal = filter_input(INPUT_POST, 'estoque-final');
$saidas = filter_input(INPUT_POST, 'saidas');
$estoqueInicial = filter_input(INPUT_POST, 'estoque-inicial');
$mediaEstoque = filter_input(INPUT_POST, 'media-estoque-3');

if (isset($produto) && !empty($produto)) {

  $sql = $pdo->prepare("INSERT INTO 
  estoque (produto, marca, tamanho, estoqueFinal, saidas, estoqueInicial, mediaEstoque)
  VALUES (:produto, :marca, :tamanho, :estoqueFinal, :saidas, :estoqueInicial, :mediaEstoque)");

  $sql->bindValue(':produto', $produto);
  $sql->bindValue(':marca', $marca);
  $sql->bindValue(':tamanho', $tamanho);
  $sql->bindValue(':estoqueFinal', $estoqueFinal);
  $sql->bindValue(':saidas', $saidas);
  $sql->bindValue(':estoqueInicial', $estoqueInicial);
  $sql->bindValue(':mediaEstoque', $mediaEstoque);
  $sql->execute();

  header("Location: index.php");
  exit;

} else {
  echo "Algo de errado não deu certo....";
}
?>