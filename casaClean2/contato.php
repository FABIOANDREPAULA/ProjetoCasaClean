<?php
  ob_start();
?>
<link rel="stylesheet" href="css/contato.css">
<h2 class="tituloContato">Entre em contato com a Casa Clean</h2>
<div class="container col-md-6 traco"></div>
<form class="container col-lg-6">
  <fieldset class="container">      
      <div >
        <div  class="form-group">
          <label><b>Nome Completo</b></label>
          <input class="form-control interior" type="text" placeholder="Nome Completo" maxlength="50" name="nome"/>
        </div>
      </div>
      <div >
        <div class="form-group">
          <label><b>Telefone de Contato</b></label>
          <input class="form-control interior"type="text" placeholder="DDD + Numero" maxlength="30" name="telefone"/>
        </div>
         </div>

      <div >
        <div class="form-group">
          <label><b>Email</b></label>
          <input class="form-control interior" type="email" placeholder="Informe seu email" maxlength="50" name="telefone">
        </div>
      </div>
  
      <div>
        <div clas ="form-group">
          <label ><b>Observação</b></label>
         <textarea class="form-control interior" cols="70" rows="6" placeholder="Escreva o que precisa, nossa equipe retornará em breve."></textarea>
        </div>
        <button type="submit" class="btn btn-primary" value="">Enviar
          <i class="material-icons right"><img src="imagens/enviar.png" width="30" height="30"></i>
        </button>
        <button type="reset" class=" btn btn-primary">Limpar</button>
         <a href="index.php" class=" btn btn-primary">Voltar</a>
      </div>
  </fieldset>
</form>
<?php
  $conteudo = ob_get_contents();
  ob_end_clean();
  include "layout.php"
?>