<?php
// require ("header-lancamentos.php");
require ("Produto.class.php");

$id = isset($_GET['id']) ? addslashes($_GET['id']) : null;
$op = isset($_GET['op']) ? addslashes($_GET['op']) : 0;

// var_dump($op);
// exit;
$prod = "";
$p = new Produto();

if($id === null) {
  header("Location: index.php");
} else {
  $prod = $p->getItem($id);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
  <span aria-hidden="true">&times;</span> -->
<div class="container">
  
  <form action="lancamentos-action.php" method="POST">

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="produto">Produto</label>
        <input name="produto" type="text" class="form-control" value="<?=$prod['produto']; ?>" disabled>
      </div>
      <div class="form-group col-md-6">
        <label for="marca">Marca</label>
        <input name="marca" type="text" class="form-control" value="<?=$prod["marca"];?>" disabled>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-4">            
        <label for="unMedida">Un Medida</label>
        <input name="unMedida" type="text" class="form-control" value="<?=$prod["unMedida"];?>" disabled>
      </div>
      <div class="form-group col-md-4">            
        <label for="qnt">Qnt</label>
        <input name="qnt" type="text" class="form-control" value="<?=$prod["unMedida"];?>" disabled>
      </div>
      <div class="form-group col-md-4">            
        <label for="medico">Médico (a)</label>
          <select name="medico" id="medico" class="form-control" <?=($op=="1" ? "disabled" : "") ?>>
            <option value=""></option>
            <option value="Dr. Elder">Dr. Elder</option>
            <option value="Dra. Gabriela">Dra.Gabriela</option>
          </select>
      </div>
    </div>
    <dvi class="form-row">
      <div class="form-group col-md-6">            
        <label for="operacao">Operação</label>
        <select id="operacao" class="form-control" name="operacao">
          <option value="<?=$op?>"><?php echo ($op == "1") ? "Entrada" : "Saida"; ?></option>
        </select>
      </div>
        <div class="form-group col-md-6">
        <label for="qntInserida">Inserir Qnt</label>
        <input type="number" class="form-control" name="qntInserida">
        </div>
    </dvi>
    <input type="hidden" name="id" value="<?=$prod['id'];?>">
    <input type="submit" class="btn btn-<?php echo ($op == "1") ? "success" : "danger" ?>" value="<?php echo ($op == "1") ? "Entrada" : "Saida"; ?>">
  </form>

</div>



  <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css"> -->
</body>
</html>
