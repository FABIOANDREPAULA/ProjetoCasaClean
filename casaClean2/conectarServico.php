<?php
    $servico = $_POST['servicos'];
    $data = $_POST['data'];
    $horaInicio = $_POST['horaInicio'];
    $horaFim = $_POST['horaFim'];
    $valor = $_POST['valor'];


    $conexao = new mysqli('localhost','root','','casaclean');
    if($conexao->connect_error){
        die ('Conexão falhou! : '.$conexao->connect_error);
    }else{
        $sql = "insert into novoServico(DataServico, HoraInicio,Valor,HoraFim, servico)
        values(?,?,?,?,?)";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ssdss", $data, $horaInicio, $valor, $horaFim, $servico);
        $stmt->execute();
        echo "Registro de Horário concluído!";
        $stmt->close();
        $conexao->close();
        header('Location: contratar.php');
    }

    /*private $pdo;
    private $pdo2;
    public $msgErro=" ";

    public function listar($servico, $data, $horaInicio, $horaFim, $valor){
        global $pdo;
        global $pdo2;
        global $msgErro;

        try{
            $pdo= new PDO("mysql:dbname= casaclean;host=localhost","root","");
        }
        catch (PdoException $e){
          $msgErro=$e->getMessage();
        }

        try{
            $pdo2= new PDO("mysql:dbname=projetologin;host=localhost","root","");
        }
        catch (PdoException $e){
          $msgErro=$e->getMessage();
        }

    }*/

?>