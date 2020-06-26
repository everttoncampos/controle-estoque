<html>
<head>
<style>
  table tbody{
  }
  thead tr {
    background-color: #CCC !important;

  }
  td, th {
    padding: 15px 10px;
    font-weight: 600;
  }
  tr:nth-child(even) {
    background-color: rgba(150, 230, 150, 0.5);
  }
  tr:nth-child(odd) {
    background-color: #abc;
  }
</style>
</head>
</html>

<?php
session_start();
require_once ('config.php');
require_once 'vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$dataInicio = filter_input(INPUT_POST, 'dataInicio');
$dataFinal = filter_input(INPUT_POST, 'dataFinal');

$usuario = $_SESSION['getInfo']['nome'];

$sql = $pdo->query("SELECT * FROM relatorio WHERE DATE(datatime) BETWEEN '$dataInicio' AND '$dataFinal'");

$itensDataEstabelecida = $sql->fetchAll(PDO::FETCH_ASSOC);

$html = "";
$html .= '<div style="
  padding: 0;
  display:flex;
  flex-direction: column;
  justify-content: center;
  align-itens: center;
  text-align: center;
  margin: auto;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 10px;
">';
$html .= '<h1 style="text-align: center;">Relatótio <small> de '.$dataInicio.' até '.$dataFinal.'</small></h1>';
$html .= '<table style="
  width:80%;
  margin: 30px auto;
  padding: 0;
  ">';
  
$html .= '<thead>';

$html .= '<tr>';

$html .= '<th>Usuario</th>';
$html .= '<th>Operação</th>';
$html .= '<th>Produto</th>';
$html .= '<th>Quantidade Operação</th>';
$html .= '<th>Quantidade Atual</th>';
$html .= '<th>Doutor</th>';
$html .= '<th>Data e Hora</th>';

$html .= '</tr>';
$html .= '</thead>';

$html .= '<tbody style="
  text-align: center;
">';

foreach($itensDataEstabelecida as $item) {

  $html .= '<tr>';
  $html .= '<td>'.$usuario.'</td>';
  $html .= '<td>'.$item['operacao'].'</td>';
  $html .= '<td>'.$item['produto'].'</td>';
  $html .= '<td>'.$item['qntOperacao'].'</td>';
  $html .= '<td>'.$item['qntAtual'].'</td>';
  $html .= '<td>'.$item['medico'].'</td>';
  $html .= '<td>'.$item['datatime'].'</td>';
  $html .= '</tr>';

}
$html .= '</div>';

$html .= '</tbody>';
$html .= '</table>';

$mpdf->WriteHTML($html);
$mpdf->Output();