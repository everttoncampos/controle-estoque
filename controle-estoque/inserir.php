<?php
require ('config.php');
require ('header.php');
?>

      <div class="col-10 container-fluid">

        <form method="POST" action="cadastro-produto-action.php">
          <div class="form-group">
            <label for="produto">Produto</label>
            <input name="produto" type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="marca">Marca</label>
            <input name="marca" type="text" class="form-control">
          </div>
          <div class="form-group">            
            <label for="tamanho">Tamanho</label>
            <input name="tamanho" type="text" class="form-control">
          </div>
          <div class="form-group mb-2">
            <label for="Estoque Final">Estoque Final</label>
            <input name="estoque-final" type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="Saidas">Saidas</label>
            <input name="saidas" type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="Estoque Inicial">Estoque Inicial</label>
            <input name="estoque-inicial" type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="Média Estoque #3">Média Estoque #3</label>
            <input name="media-estoque-3" type="text" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">Adicionar</button>
        </form>

      </div>
    </div>
  </div>
</body>
</html>