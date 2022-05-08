<?php

    include("conexao.php");

    $sql = "select * from imagem";
    $resposta = $conexao->query($sql);

    if(mysqli_num_rows($resposta) > 0){
        ?>

        <html>

            <head>
                <title>Lista de imagens</title>
                <meta charset="utf-8">
                <link rel="stylesheet" href="../css/estilo_tabela.css">
            </head>

            <body>
                <table>

                    <tr>
                        <td class="td_title">IMAGEM</td>
                        <td class="td_title">DATA DE UPLOAD</td>
                    </tr>

                    <?php
                        while($row = mysqli_fetch_assoc($resposta)){
                            ?>

                            <tr>
                                <td>
                                    <img width="120" src="<?php echo $row['caminho']; ?>" >
                                </td>
                                <td class="td_data">
                                    <?php echo date("d/m/Y H:i", strtotime($row['data_upload'])) ?>
                                </td>
                            </tr>

                            <?php
                        }
                    ?>

                    <tr>
                        <td colspan="2" class="td_footer">
                            <a href="../index.html">Voltar</a>
                        </td>
                    </tr>

                </table>
            </body>

        </html>

        <?php
    }

?>