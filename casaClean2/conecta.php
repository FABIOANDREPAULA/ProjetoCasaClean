<?php
    $conexao=mysqli_connect('localhost','root','','projeto_login');
    mysqli_set_charset($conexao,'utf-8');
    if($conexao->connect_error){
        die ("Falha ao realizar a conexao:".$conexao->connect_error);
    }

?>