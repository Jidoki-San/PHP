<html>

    <head>
        <title>Tela de login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/estilo_login.css">
    </head>


    <body>
        <div class="container">

            <div class="form_box">

                <div class="h1_box">
                    <h1>Login</h1>
                </div>
                <?php
                    if(isset($_SESSION['nao_autenticado'])){
                ?>
                    <div class="erro_box">
                        Usuário ou senha inválidos!
                    </div>
                <?php
                    }
                ?>
                <form action="" method="">
                    <label>Login</label>
                    <input type="text" name="i_login" class="i_text">

                    <label>Senha</label>
                    <input type="password" name="i_senha" class="i_text">

                    <input type="submit" value="Logar" id="btt_form">
                </form>

                <div class="link_box">
                    Ainda não tem cadastro? <a href="">Cadastre-se</a>
                </div>

            </div>

        </div>
    </body>

</html>