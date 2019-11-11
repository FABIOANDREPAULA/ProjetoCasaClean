  <?php
    ob_start()
  ?>
    <link rel="stylesheet" type="text/css" href="css/contratar.css" />
    <h3 class=" container subtitulo">
      Estamos quase lá, complete os dados para finalizar o pedido...
    </h3>

    <h2 class="tituloFormulario">Complete o Formulário</h2>
    <form class="container" id="test" action="conectarBanco.php" method="post">
      
      <fieldset class="formCadastro">
        <div>
          <div class="row">
            <div class="form-group col-md-2">
              <label>CEP</label>
              <input type="text" class="form-control interior" name="cep"/>
            </div>
            <div class=" col-md-6">
              <label>Endereço</label>
              <input type="text" class="form-control interior" placeholder="Rua dos Bobos" name="endereco" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-2">
              <label>Numero</label>
              <input type="text" class="form-control interior" placeholder="Numero" name="numero"/>
            </div>
            <div class="form-group col-md-4">
              <label>Bairro</label>
              <input type="text" class="form-control interior" placeholder="Bairro" name="bairro"/>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label>Complemento</label>
              <input
                type="text"
                class="form-control interior"
                placeholder="Apartamento, hotel, casa, etc."
                name="complemento"
              />
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Cidade</label>
              <input type="text" class="form-control interior" placeholder="Cidade" name="cidade"/>
            </div>

            <div class="form-group col-md-4">
              <label>Estado</label>
              <select class="form-control interior" name="estado">
                <option name="estado" selected>Escolher...</option>
                <option name="estado" value='MG'>MG</option>
                <option name="estado" value='SP'>SP</option>
                <option name="estado" value='RJ'>RJ</option>
                <option name="estado" value='SC'>SC</option>
                <option name="estado" value='AM'>AM</option>
                <option name="estado" value='ES'>ES</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" />
              <label class="form-check-label">
                Clique em mim
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Concluir</button>
          <button type="reset" class="btn btn-primary" value="Entrar">Limpar</button>
          <a href="datahora.php" class="btn btn-primary">Voltar</a>
        </div>
      </fieldset>
    </form>

    <?php
      $conteudo = ob_get_contents();
      ob_end_clean();
      include "layout.php";
    ?>
