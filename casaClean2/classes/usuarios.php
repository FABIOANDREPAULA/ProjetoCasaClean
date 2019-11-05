<?php
  class Usuario{
      private $pdo;
      public $msgErro="";
      public function conectar($nome, $host, $usuario, $senha){
        global $pdo;
        global $msgErro;
        try{
            $pdo= new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
        }
        catch (PdoException $e){
          $msgErro=$e->getMessage();
        }
        
      }
      public function cadastrar($nome,$telefone,$email,$senha){
        global $pdo;
        global $msgErro;

        $sql=$pdo->prepare("SELECT id_usuario FROM usuario WHERE email = :e");
        $sql->bindValue(":e",$email);
        $sql->execute();
        if($sql->rowCount()>0){
            return false;
        }
        else {
            $sql=$pdo->prepare("INSERT INTO usuario(nome,telefone,email,senha) VALUES(:n,:t,:e,:s)");
            $sql->bindValue(":n",$nome);
            $sql->bindValue(":t",$telefone);
            $sql->bindValue(":e",$email);
            $sql->bindValue(":s",md5($senha));
            $sql->execute();
            
            
            return true;
        }
      }
      public function logar($email, $senha){
        global $pdo;
        global $msgErro;
        
        
        error_reporting(0);
        define ('HOST','localhost');
        define ('USER', 'root');
        define ('PASS', '');
        define ('BASE','projeto_login');

    $conexao= 'mysql:host='.HOST.';dbname='.BASE;
    try{
        $conecta= new PDO($conexao,USER,PASS);
        $conecta->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $erro){
        echo "Erro ao se conectar ao banco de dados! Erro:".$erro->getMessage();
    }
    
        $login = $_POST['email'];
        $senha = $_POST['senha'];
        

    $sql=$conecta->prepare("SELECT * FROM usuarios WHERE email='$login' AND senha='$senha'");
    $sql->execute();
    $num=$sql->rowCount();
    echo $num;
    if($num >0){
        session_start();
        $_SESSION["email"]=$login;
        $_SESSION["senha"]=$senha;
        $linha=$sql->fetch();
        
                $nivel=$linha['nivel']; 
                switch($nivel){
                    case '0': 
                        header("location:homelogar.php");
                        break;
                    case '1': 
                        header("location:adm.php");
                    break;
                    default:
                        echo "Usuario sem nível!";
                        
                    break;
                }
              }
            }
          }
    

?>