<?php
session_start();
require('header.php');
?>

<div class="col-10 conteudo container-fluid">
        
  <h3>Relatórios</h3>
  <hr>

  <!-- <div id="opcoes">
  <p>Seleciono o tipo de relatório:</p>
    <input type="checkbox" value="data" name="data" id="data">
    <label for="data">Data</label></br>
    <input type="checkbox" value="in-out" name="in-out" id="in-out">
    <label for="in-out">Entrada / Saída</label></br>
    <input type="checkbox" value="saida" name="saida" id="saida">
    <label for="saida">Saída</label></br>
  </div> -->

  <div style="display:block;" id="data">
    <form action="relatorio-data-action1.php" method="POST">
    <label for="dataInicio">De: </label>  
    <input type="date" name="dataInicio"> 
    <label for="dataFinal">Até: </label>  
    <input type="date" name="dataFinal">
    <input type="submit" value="Gerar Relatório">
    </form>
  </div>

  <div id="in-out" style="">

    <p>Escolha uma opção:</p>

    <form action="relatorio-data-action1.php" method="POST" id="in-out">

      <select name="in-out" id="in-out">

        <option value="entrada">Entrada</option>        
        <option value="saida" id="doutores">Saída</option>

      </select>

      <select name="doutores" id="doutores" style="display:none;">

        <option value="Dra. Grabiela">Dra. Grabiela</option>
        <option value="Dr. Elder">Dr. Elder</option>

      </select>

      <input type="submit" value="Gerar relatório">

    </form>
    
  </div>

  <script type="text/javascript" src="assets/js/jquery.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
