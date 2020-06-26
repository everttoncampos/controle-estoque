<?php 
session_start();
require ("header.php");

// print_r($_SESSION['getInfo']);
// exit;

if (!($_SESSION['getInfo'])) {
  // unset($_SESSION['getInfo']);
  header("Location: login.php");
}

?>

      <div class="conteudo">
        
        <a href="cadastro-produto.php" class="btn btn-primary" data-toggle="modal" data-target="#modalAdd" onclick='modalAdd()'>Adicionar novo produto</a>

        <a href="relatorio.php" class="btn btn-secondary" id="modal_acao">Relatório</a>   

        <input type="text" name="filtroProduto" id="key" placeholder="Encontre o produto aqui..." class="pesquisa btn">

        <div id="ResultadoFiltro"></div>        

        <!-- <div class="modal_bg show" id="modal_bg"></div> -->

        <div class="modal" id="modal" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

              <div class="modal-header">
                <h5 class="modal-title">Lançamentos</h5>
                <button class="close x" type="button" data-dismiss="modal">
                  <span>&times;</span>
                </button>                  
              </div>

              <div class="modal-body">
                
              </div>

            </div>
          </div>
        </div>

        <div class="modal" id="modalAdd" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

              <div class="modal-header">
                <h5 class="modal-title">Adicionar</h5>
                <button class="close x" type="button" data-dismiss="modal">
                  <span>&times;</span>
                </button>                  
              </div>

              <div class="modalAdd">
                
              </div>
              
            </div>
          </div>
        </div>

      </div>
        
  <script type="text/javascript" src="assets/js/jquery.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/main.js"></script>
  <script type="text/javascript" src="assets/js/app.js"></script>
  
</body>
</html>