<?php 
session_start();
require ("config.php");

if (isset($_POST['email']) && !empty($_POST['email'])) {
  if (isset($_POST['senha']) && !empty($_POST['senha'])) {
    $email = addslashes($_POST['email']);
    // $senha = md5(addslashes($_POST['senha']));
    $senha = addslashes($_POST['senha']);

    $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":senha", $senha);
    $sql->execute();

    if ($sql->rowCount() > 0) {
      $array = array();

      $array = $sql->fetch(PDO::FETCH_ASSOC);

      $_SESSION['getInfo'] = $array ? $array : "";

      header("Location: index.php");
      
    } else {
      
      header("Location: login.php");

    }

    

  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/login.css">
  <title>Login</title>
</head>
<body>
  
  <div class="container">
     
    <div class="form">
      <h2>Login</h2> 
      <form action="" method="POST">
      
        <input type="text" placeholder="E-mail" name="email"></br>
        <input type="password" placeholder="Senha" name="senha"></br>

        <input type="submit" value="Entrar" id="buttom">
      
      </form>
    </div>

  </div>

</body>
</html>