<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
</head>
<body>
    <?php
        require 'vendor/autoload.php';

        $nome=$_POST['nome'];
        $telefone=$_POST['telefone'];
        $email=$_POST['email'];
        $observacao=$_POST['observacao'];

        $from = new SendGrid\Email(null, "casaclean@gmail.com");
        $subject = "Mensagem de contato";
        $to = new SendGrid\Email(null, "fabioap@unipam.edu.br");
        $content = new SendGrid\Content("text/html", "Olá ADM, <br><br>Nova mensagem de contato<br><br>Nome: $nome<br>Telefone: $telefone <br>E-Mail: $email<br>Observação:$observacao");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        echo "Mensagem enviada com sucesso";

    ?>
</body>
</html>
