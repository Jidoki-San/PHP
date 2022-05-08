<head>
    <title>Edição</title>
    <meta charset="utf-8">
    <script src="../js/validacao.js"></script>
    <link rel="stylesheet" href="../css/estilo_form.css">
</head>

<?php

    include "conexao.php";

    $cod = $_GET['cod_prod'];
    $sql = "select * from produto where cod_prod=$cod";
    $resposta = $conexao->query($sql);

    if(mysqli_num_rows($resposta) > 0){
        $row = mysqli_fetch_assoc($resposta);

        ?>
            <div class="form_box">
                <h1>Editar o produto</h1>
                
                <form action="atualizar.php?cod_prod=<?php echo $row["cod_prod"] ?>" method="post">
                    <div class="form_input">
                        <input type="text" name="i_nome" id="i_nome" placeholder="nome" class="i_text" value="<?php echo $row["nome"] ?>" required>
                        <input type="number" name="i_quantidade" id="i_quantidade" placeholder="quantidade" class="i_text" value="<?php echo $row["quantidade"] ?>" required>
                        <input type="text" name="i_preco" id="i_preco" placeholder="preço" class="i_text" value="<?php echo $row["preco"] ?>" required>
                        <input type="submit" value="atualizar" id="btt_form" onclick="validacao();">
                    </div>
                </form>

                <a href="leitura.php">Voltar</a>
            </div>
        <?php

    }else{
        echo "Nenhuma informação registrada!";
    }

?>