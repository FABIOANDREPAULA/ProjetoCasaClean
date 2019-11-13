  <?php
    ob_start();
  ?>
    <link rel="stylesheet" type="text/css" href="css/dataHora.css" />
    <h2 class="tituloContratar">Escolha o serviço desejado</h2>

    <form class="container col-md-3" action="conectarServico.php" method="POST">
      <fieldset class="container">
        <div class="form-group">
          <select class="form-control seletor" id="servico" name="servicos">
            <option name="servicos" selected>Selecione um serviço...</option>
            <option name="servicos" value="Vizinho">BOM VIZINHO</option>
            <option name="servicos" value="Churrasqueiro">CHURRASQUEIRO</option>
            <option name="servicos" value="Cozinheira">COZINHEIRA</option>
            <option name="servicos" value="Faxineira"> FAXINEIRA</option>
            <option name="servicos" value="Passadeira">PASSADEIRA</option>
            <option name="servicos" value="Passeadora">PASSEADOR DE CÃES</option>
          </select>
        </div>
      </fieldset>
    <h2 class="tituloHora">Escolha a Data e Horário</h2>
          <fieldset class="container">
            <div class="form-group ">Data:<input type="date" class="form-control interior" name="data"/></div>
            <div class="form-group ">
              Hora Início:<input type="time" class="form-control interior" name="horaInicio"/>
            </div>

            <div class="form-group ">
              Horas Fim:<input type="time" class="form-control interior" name="horaFim" />
            </div>
            <div class="form-group">
              Valor:<input type="text" class="form-control interior" name="valor" />
            </div>
            <button type="submit" class="btn btn-primary" value="Entrar">Próximo</button>
            <a href="index.php" class="btn btn1 btn-primary horaServico">Voltar</a>
          </fieldset>
          <p>
          <button style="padding-top: 10px; margin-left: 15px;" class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            <strong>Conferir tabela de Preços</strong>
          </button>
        </p>
        <div class="collapse" id="collapseExample">
          <div>
            <?php 
              ob_start();
              $tabela = ob_get_contents();
              ob_end_clean();
              include "tabela.php";
            ?>
          </div>
        </div>
        </form>
      </div>
    </div>

    <?php
      $conteudo = ob_get_contents();
      ob_end_clean();
      include "layout.php";
    ?>

