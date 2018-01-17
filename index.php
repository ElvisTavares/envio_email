<?php
    $msg=0;
    @$msg = $_REQUEST['msg'];

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <title>Formulário</title>
    </head>

    <body>

        <?php if($msg=="enviado"): ?>
        <h1>Agradecemos o contato</h1>

        <?php else: ?>



            <div>
        <fieldset>

            <legend><h3>Formulário de contato</h3></legend>

            <form action="form_capt.php" method="post">
                <label for="nome">Nome: </label><br>
                <input id="nome" name="nome" type="text" required><br>

                <label for="telefone">Telefone</label><br>
                <input id="telefone" name="telefone" type="tel" required><br>

                <label for="email">Email: </label><br>
                <input id="email" name="email" type="email" required><br>

                <label for="assunto">Mensagem: </label><br>
                <textarea name="assunto" id="assunto"></textarea><br>

                <input type="submit">

            </form>
        </div>

        </fieldset>
    <?php endif; ?>
    </body>

</html>