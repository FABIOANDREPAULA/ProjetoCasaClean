<?php
    session_start();

    $servico = $_POST['servicos'];
    $data = $_POST['data'];
    $horaInicio = $_POST['horaInicio'];
    $horaFim = $_POST['horaFim'];
    $valor = $_POST['valor'];


    $_SESSION['servicos'] = $servico;
    $_SESSION['data'] = $data;
    $_SESSION['horaInicio'] = $horaInicio;
    $_SESSION['horaFim'] = $horaFim;
    $_SESSION['valor'] = $valor;
    

    $conexao = new mysqli('localhost','root','','casaclean');
    if($conexao->connect_error){
        die ('Conexão falhou! : '.$conexao->connect_error);
    }else{
        $sql = "insert into novoservico(servico,DataServico,HoraInicio,HoraFim,Valor)
        values(?,?,?,?,?)";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ssssd", $servico, $data, $horaInicio, $horaFim, $valor);
        $stmt->execute();
        echo "Registro de Serviço concluído!";
        $stmt->close();
        $conexao->close();
        header('Location: contratar.php');
    }

    

    ?>

    