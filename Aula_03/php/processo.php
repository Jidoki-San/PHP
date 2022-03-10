<?php
    $nome_$POST['i_nome'];
    $email_$POST['i_email'];
    $tel_$POST['i_tel'];
    $cpf_$POST['i_cpf'];
?>

<html>

    <head>
        <title>Informações</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../cs/estilo_resp.css">
    </head>

    <body>
        <div class="container">
            <div class="box">
                <ul>
                    <li>
                        <span>NOME</pan>
                        <?php echo $nome ?>
                    </li>

                    <li>
                        <span>E-MAIL</span>
                        <?php echo $email ?>
                    </li>

                    <li>
                        <span>TELEFONE</span>
                        <?php echo $tel ?>
                    </li>

                    <li>
                        <span>CPF</span>
                        <?php echo $cpf ?>
                    </li>
                </ul>
            </div>
        </div>
    </body>

</html>