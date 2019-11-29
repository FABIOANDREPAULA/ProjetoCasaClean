 <?php
  ob_start();
  ?>
    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Casa Clean</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" />

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/freelancer.js"></script>
  </head>
  <body>
  <nav class="navbar fixed-top navbar-dark navbar-expand-lg">
      <div class="container">
        <a href="index.php">
          <img class="logo" src="imagens/logo3.png" alt="Logomarca" />
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navcinema"
          aria-controls="navcinema"
          aria-label="Toggle navigation"
          aria-expanded="false"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navcinema">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="datahora.php">Serviços</a></li>
            <li class="nav-item"><a class="nav-link" href="emprego.php">Vagas de Emprego</a></li>
            <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre</a></li>
            <li class="nav-item transicao"><a class="nav-link" href="contato.php">Contato</a></li>
            <li class="nav-item"><a class="nav-link" href="sair.php">Sair</a></li>
           
          </ul>
        </div>
      </div>
    </nav>
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    

    <section id="serv">
      <div class="container">
        <h1 class="tituloServico">Serviços que oferecemos</h1>
        <div class="row">
          <div class="col-md-4 servicos">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="imagens/faxineira.jpg" alt="Imagem de capa do card" />
              <div class="card-body">
                <h5 class="card-title">Faxineira</h5>
                <p class="card-text">
                  Um exemplo de texto rápido para construir o título do card e fazer preencher o
                  conteúdo do card.
                </p>
                <a href="javascript:void(0)" class="btn btn-primary" onclick="PagSeguroLightbox('249D623D9191E406648C1FBFC053DF49'); return false;">4h de Serviço</a><script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
                <a href="javascript:void(0)" class="btn btn-primary" onclick="PagSeguroLightbox('26709FD63F3F272FF462AF9397C1A9D8'); return false;">8h de Serviço</a><script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script> 
              </div>
            </div>
          </div>

          <div class="col-md-4 servicos">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="imagens/passadeira.jpg" alt="Imagem de capa do card" />
              <div class="card-body">
                <h5 class="card-title">Passadeira</h5>
                <p class="card-text">
                  Um exemplo de texto rápido para construir o título do card e fazer preencher o
                  conteúdo do card.
                </p>
                <a href="javascript:void(0)" class="btn btn-primary" onclick="PagSeguroLightbox('0FB47FDF0C0CEF2994FF6FAF6BDAE3AD'); return false;">Contratar Servico</a><script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
              </div>
            </div>
          </div>

          

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-top: 20px">
  Confira a Tabela de Preços
</button>
      </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tabela de Preços</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <?php
        ob_start();
        $tabela = ob_get_contents();
        ob_end_clean();
        include "tabela.php";
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

    </section>

    <?php
        $conteudo = ob_get_contents();
        ob_end_clean();
        include "layout.php";
    ?>
