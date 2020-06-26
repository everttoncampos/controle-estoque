<?php
session_start();
require_once ('config.php');
require_once 'vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);

$dataInicio = filter_input(INPUT_POST, 'dataInicio');
$dataFinal = filter_input(INPUT_POST, 'dataFinal');
$inOut = filter_input(INPUT_POST, 'in-out') == 'entrada' ? '1' : '0';

// echo $inOut;
// exit;

$usuario = $_SESSION['getInfo']['nome'];

if (!empty($dataInicio) && !empty($dataFinal)) {

  $sql = $pdo->query("SELECT * FROM relatorio WHERE DATE(datatime) BETWEEN '$dataInicio' AND '$dataFinal'");

  $itensDataEstabelecida = $sql->fetchAll(PDO::FETCH_ASSOC);

} elseif (!empty($inOut) || $inOut == '0') {
  
  $sql = $pdo->query("SELECT * FROM relatorio WHERE operacao = '$inOut'");

  $itensDataEstabelecida = $sql->fetchAll(PDO::FETCH_ASSOC);
}

// print_r ($itensDataEstabelecida);
// exit;

// $itensDataEstabelecida = $sql->fetchAll(PDO::FETCH_ASSOC);

ob_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relatório</title>
  <link rel="stylesheet" href="assets/css/style-pdf.css" media="print">
</head>
<body>

<?php 
  if (!empty($inOut) || $inOut == "0") {
    $op = ($inOut == "1") ? "Entrada" : "Saída";

    echo "<h3> Relatório de ".$op."</h3>";
  } else {
    echo "<h3>Relatório de: ".$dataInicio." até: ".$dataFinal."</h3>";
  }
?>
  <hr>
  <div class='relatorio'>
    <table>
      <thead>
        <tr>
          <th>Usuário</th>
          <th>Operação</th>
          <th>Produto</th>
          <th>Qnt Operação</th>
          <th>Qnt Atual</th>
          <th>Doutor</th>
          <th>Data e Hora</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach($itensDataEstabelecida as $item): ?>
          <tr>
            <td><?=$usuario?></td>
            <td><?=$item['operacao'] ? "Entrada" : "Saída" ?></td>
            <td><?=$item['produto'] ?></td>
            <td><?=$item['qntOperacao'] ?></td>
            <td><?=$item['qntAtual'] ?></td>
            <td><?=$item['medico'] ?></td>
            <td><?=$item['datatime'] ?></td>
          </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html>

<?php 

$html = ob_get_contents();
ob_end_clean();

// echo $html;

$style = file_get_contents('assets/css/style-pdf.css');

$mpdf->SetDisplayMode('fullwidth');

$mpdf->WriteHTML($style, 1);
$mpdf->WriteHTML($html);
$mpdf->Output();
