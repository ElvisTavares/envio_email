<?php


/* primeira versão para testes...
$nome= $_POST['nome'];
$fone = $_POST['telefone'];
$email = $_POST['email'];
$msg = $_POST['assunto'];

echo $nome."<br>";
echo $fone."<br>";
echo $email."<br>";
echo $msg;


*/

$para ="email@email.com";
$assunto = "Contato Pelo site";
$nome = $_REQUEST['nome'];
$fone = $_REQUEST['telefone'];
$email = $_REQUEST['email'];
$msg = $_REQUEST['assunto'];

                $corpoMsg = "<strong>Mensagem de contato</strong><br><br>";
                $corpoMsg .= "<strong>Nome: </strong> $nome";
                $corpoMsg .= "<br><strong>Telefone: </strong> $fone";
                $corpoMsg .= "<br><strong>Email: </strong>$email";
                $corpoMsg .= "<br><strong>Assunto: </strong>$msg";

    $header .="Content-Type: text/html; charset= utf-8\n";
    $header = "From: $email Reply-to: $email\n";


        @mail($para, $assunto, $corpoMsg, $header);

        header("location:index.php?msg=enviado");


