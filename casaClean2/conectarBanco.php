<?php

    session_start();

    $cep = $_POST['cep'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $complemento = $_POST['complemento'];
    $cidade = $_POST['cidade'];
    
    $_SESSION['cep'] = $cep;
    $_SESSION['estado'] = $estado;
    $_SESSION['endereco'] = $endereco;
    $_SESSION['numero'] = $numero;
    $_SESSION['bairro'] = $bairro;
    $_SESSION['complemento'] = $complemento;
    $_SESSION['cidade'] = $cidade;

    $conexao = new mysqli('localhost','root','','casaclean');
    if($conexao->connect_error){
        die ('Conexão falhou! : '.$conexao->connect_error);
    }else{
        $sql = "insert into endereco(CEP,Complemento,Numero,Bairro,Logradouro,estado)
        values(?,?,?,?,?,?)";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ssssss", $cep, $complemento, $numero, $bairro, $endereco, $estado);
        $stmt->execute();
        echo "Registro de Contratação concluído!";
        $stmt->close();
        $conexao->close();
        header('Location: index.php');
    }

?>