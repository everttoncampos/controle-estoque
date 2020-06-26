<?php
require ('config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inovatto - Estoque</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css"> 
</head>

<body>
  <div class="container-fluid  topo bg-inovatto">
    <div class="container-fluid ">
      <div class="align">
        <div class="texto">
          <h2>Controle Administrativo</h2>
        </div>
        <div class="nome">
          <span>Bem vindo <?= $_SESSION['getInfo']['nome'] ?></span> |
          <a href="sair.php"> [ SAIR ] </a>
        </div>
      </div>
    </div>
  </div>


  