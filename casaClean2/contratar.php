  <?php
    ob_start();
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
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" name="concluir">Concluir</button>
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Confirmar Contratação</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <?php
                    session_start();

                    $nome = $_SESSION["nome"];
                    $servico = $_SESSION['servicos'];
                    $data = $_SESSION['data'];
                    $horaInicio = $_SESSION['horaInicio'];
                    $horaFim = $_SESSION['horaFim'];
                    $valor = $_SESSION['valor'];

                    echo $nome.", O serviço que você contratou é: \n".$servico.", na data "
                    .$data.", durante o Horário das: ".$horaInicio." - ".$horaFim."\n Valor Total: ".$valor;
                  ?>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal" name="cancelar">Cancelar
                  <?php
                      if(isset($_POST['cancelar'])){
                      session_unset($_SESSION['servicos'], $_SESSION['data'], 
                      $_SESSION['horaInicio'], $_SESSION['horaFim'], $_SESSION['valor']);
                      echo "<script type='text/javascript'>location.href = 'datahora.php'; </script>";
                      }
                  ?>
                  </button>
                  <button type="submit" class="btn btn-primary">Sim</button>
                </div>
              </div>
            </div>
          </div>
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
