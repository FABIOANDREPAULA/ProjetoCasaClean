<?php
  ob_start();
?>
<link rel="stylesheet" href="css/sobre.css">

  <h2 class="titulo1">QUEM SOMOS?</h2>
  <div class="container col-sm-9 traco"></div>
  <div class="container col-md-8">
    <p>A Casa Clean Soluções Domésticas é uma
empresa especializada em agenciar diaristas para
executar diversos serviços em residências,
consultórios, escritórios e pequenas empresas.</p>
  </div>

  <h2 class="titulo2">NOSSA PROPOSTA É SIMPLES:</h2>
  <div class="container col-sm-9 traco"></div>
  <div class="container col-md-8">
  <p>Buscar profissionais qualificados
que querem trabalhar e colocar
nas casas ou empresas de pessoas
que querem contratar!  </p>
  </div>

  <h2 class="titulo2">COMO SURGIU A IDÉIA?</h2>
  <div class="container col-sm-9 traco"></div>
  <div class="container col-md-8">
  <p>Criada para facilitar o dia a dia das pessoas, a empresa será
especializada na prestação de serviços voltados à limpeza e
cuidados domésticos e comerciais.</p>
<p>Afinal, quem já precisou contratar o serviço de uma
profissional de limpeza, por exemplo, sabe a dificuldade de
adequar às suas necessidades a uma prestação de serviço de
qualidade.</p>
  </div>
  
  <h2 class="titulo2">POR QUE CONTRATAR A CASA CLEAN?</h2>
  <div class="container col-sm-9 traco"></div>
  <div class="container col-md-8">
  <p>As profissionais Casa Clean têm experiência e estarão
aptas a realizar faxinas em residências, escritórios
comerciais e pequenas empresas.</p>

<p>Todas diaristas vão passar por treinamentos
comportamentais, processo seletivo presencial e terão
suas referências checadas e analisadas; inclusive
antecedentes criminais.</p>

<p>As diaristas CASA CLEAN vão apresentar um padrão de
comportamento único. (uniformes, maneira de se portar e
realizar as tarefas).</p>
  </div>

  <h2 class="titulo2">QUAL A SUA DOR?</h2>
  <div class="container col-sm-9 traco"></div>

  <div class="container col-md-8">
  <p> - QUANTO VALE O CONFORTO DA SUA FAMÍLIA?</p>
  <p> - CONFIE EM QUEM ENTENDE DO ASSUNTO , NÓS SEREMOS A</p>
  <p> - PONTE PARA SUAS DIFICULDADES DOMÉSTICAS !!</p>
  
  <h3 class="titulo2">- A AJUDA QUE FALTAVA NO SEU DIA A DIA !!</h3>

  <p> Alguma duvida? Clique no botão a seguir para entrar em contato.
  <a class="btn btn-primary" href="contato.php">Entrar em Contato</a>
  </div>
<?php
  $conteudo = ob_get_contents();
  ob_end_clean();
  include "layout.php"
?>

