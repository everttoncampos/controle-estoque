<?php
//recebendo os paramentros enviados pelo ajax
$param = isset($_POST['filtroProduto']) ? $_POST['filtroProduto'] : null;
//montando a table de retorno
$msg = "";
$msg .= '<table class="table">';
$msg .= '<thead class="thead-light">';
$msg .= '<tr>';
$msg .= '<th scope="col">Produto</th>';
$msg .= '<th scope="col">Marca</th>';
$msg .= '<th scope="col">Un. Medida</th>';
$msg .= '<th scope="col" onclick="abaixoMedia()">Quantidade</th>';
$msg .= '<th scope="col">Média</th>';
$msg .= '<th scope="col" class="acao">Ações</th>';
$msg .= '</tr>';
$msg .= '</tread>';
$msg .= '<tbody>';

require ("config.php");

if ($param == null) {
  $resultado = $pdo->query("SELECT * FROM estoque");
} else {
  $resultado = $pdo->prepare("SELECT * FROM estoque WHERE produto LIKE '%$param%'");
  $resultado->execute(); 

  if ($resultado->rowCount() > 0) {
    $resultado = $resultado->fetchAll(PDO::FETCH_ASSOC);
  }
}
if ($resultado) {   
  foreach ($resultado as $res) {
    $msg .= '<tr class="acao">';
    $msg .= '<td><strong>'.$res['produto'].'</strong></td>';
    $msg .= '<td>'.$res['marca'].'</td>';
    $msg .= '<td>'.$res['unMedida'].'</td>';
    $msg .= '<td id="qnt">'.$res['qnt'].'</td>';
    $msg .= '<td id="media">'.$res['media'].'</td>';
    $msg .= '<td class="botoes">
    <a href="#?id='.$res['id'].'&op=entrada" class="btn btn-success" data-toggle="modal" data-target="#modal" onclick="modal('.$res['id'].', 1)">Inserir</a>
    <a href="#?id='.$res['id'].'&op=saida" class="btn btn-danger" data-toggle="modal" data-target="#modal" onclick="modal('.$res['id'].', 0)">Saida</a>
    </td>';
  }
} else {
  $msg = "";
  $msg .= "Nenhum resultado foi encontrado...";
}

$msg .= '</tbody>';
$msg .= '</table>';

//retorna a msg concatenada
echo $msg;
?>
