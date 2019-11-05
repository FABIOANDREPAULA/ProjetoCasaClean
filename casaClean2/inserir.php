<?php
    include 'conecta.php';

    $nome=$_POST['nome'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];

    $sql="INSERT INTO usuarios VALUES";
    $sql.="('$nome','$telefone','$email','$senha')";

    if($conexao->query($sql)===TRUE){
        echo "Usuario cadastrado com sucesso!";
    } else{
        echo "Erro:".$sql."<br>".$conexao->error;
    }
        $conexao->close();
?>