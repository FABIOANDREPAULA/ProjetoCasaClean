
<?php
  
  require_once 'classes/usuarios.php';
    $u=new Usuario; 
    ob_start();
?>
<link rel="stylesheet" type="text/css" href="css/adm.css" />
<div class="card-panel" style="margin-top: 100px; margin-bottom: 100px;">

  <h1 class="tituloServico">Serviços Cadastrados</h1>
  
  <div style="padding-left: 30px; padding-right: 30px">
  <table class="responsive-table highlight table">
  <div>
    <thead>
        <tr>
          <th>Código</th>
          <th>Servico</th>
          <th>Data</th>
          <th>Horário</th>
          <th>Valor</th>
        </tr>
    </thead>
    </div>
    <?php
        $conn = new mysqli('localhost','root','','casaclean');
        if($conn->connect_error){
          die("Conexão falhou! ".$conn->connect_error);
        }

        $sql = "SELECT IdServico, servico, DataServico, HoraInicio, HoraFim, Valor FROM novoservico";
        $result = $conn->query($sql);

        if($result->num_rows>0):
          while($row = $result->fetch_assoc()):
  ?>
    <div>        
    <tbody>
      <tr>
        <td><?php echo $row["IdServico"]; ?></td>
        <td><?php echo $row["servico"]; ?></td>
        <td><?php echo $row["DataServico"]; ?></td>
        <td><?php echo $row["HoraInicio"]. " - " .$row["HoraFim"]; ?></td>
        <td><?php echo $row["Valor"]; ?></td>
      </tr>
      </div>
    </tbody>
    <?php
      endwhile;
      else:
        echo "0 resultados";
      endif;
      
      $conn->close();
    ?>
  </table>
  </div>
</div>
<?php 
  $conteudo = ob_get_contents();
  ob_end_clean();
  include "layout.php";
?>