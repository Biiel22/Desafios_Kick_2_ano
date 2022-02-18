<?php

    $Nome = $_POST['nome'];
    $Sobrenome = $_POST['sobrenome'];
    $Email = $_POST['e-mail'];
    $Cidade = $_POST['cidade'];
    $Numero = $_POST['telefone_cel'];

?>


<html>
    <head>
        <title>Prabéns!!!</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="form.css">
    </head>

    <body class="body_cadastro_concluido">
        <div id="geral2">
            
            <div>
                <h1>Olá, <?php echo $Nome ?> </h1>
            </div>
            <p>Tudo certo com seu cadastro.</p>
            <p>Ficamos felizes com a sua escolha!</p>
            <h1>Segue abaixo seus dados cadastrados</h1>

            <div>
                <p>Nome: <?php echo $Nome, " ", $Sobrenome?> </p>
                <p>Email: <?php echo $Email ?> </p>
                <p>Cidade: <?php echo $Cidade ?> </p>
                <p>Numero de Celular: <?php echo $Numero ?> </p>
            </div>

        </div>

    </body>

</html>