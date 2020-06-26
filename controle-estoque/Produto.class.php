<?php
class Produto {

  private $pdo;

  public function __construct() {
    $this->pdo = new PDO("mysql:dbname=controle-estoque;host=localhost", "root");
  }

  public function setItem($produto, $marca = "", $unMedida = "", $qnt = 0, $saidas = 0, $media = 0, $qntInicial = 0, $qntFinal = 0) {
    
    if (!($this->verificaProduto($produto))) {
      $datatime = date("Y-m-d H:i:s");
      $sql = $this->pdo->prepare("INSERT INTO estoque (produto, marca, unMedida, qnt, saidas, media, qntInicial, qntFinal, datatime) VALUE (:produto, :marca, :unMedida, :qnt, :saidas, :media, :qntInicial, :qntFinal, :datatime)");
      $sql->bindValue("produto", $produto);
      $sql->bindValue("marca", $marca);
      $sql->bindValue("unMedida", $unMedida);
      $sql->bindValue("qnt", $qnt);
      $sql->bindValue("saidas", $saidas);
      $sql->bindValue("media", $media);
      $sql->bindValue("qntInicial", $qntInicial);
      $sql->bindValue("qntFinal", $qntFinal);
      $sql->bindValue("datatime", $datatime);
      $sql->execute();

      return true;

    } else {
      echo "Produto descrito já existe...";
    }
  }

  public function getItem($id) {
    $sql = $this->pdo->prepare("SELECT * FROM estoque WHERE id = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();

    if($sql->rowCount() > 0) {
      $array = array();
      $array = $sql->fetch(PDO::FETCH_ASSOC);
      return $array;

    } else {
      header("Location: index.php");
      exit;
    }
  }

  public function getAll() {
    $array = [];
    $sql = $this->pdo->query("SELECT * FROM estoque");
    return $array =  $sql->fetchAll(PDO::FETCH_ASSOC);
  }

  public function update($id) {
    $sql = $this->pdo->prepare("UPDATE ");
  }

  private function verificaProduto($produto) {
    $sql = $this->pdo->prepare("SELECT * FROM estoque WHERE produto = :produto");
    $sql->bindValue("produto", $produto);
    $sql->execute();

    if ($sql->rowCount() > 0) {
      return true;
    }
  }
}

$p = new Produto();

