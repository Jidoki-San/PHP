<?php

    include "conexao.php";

    $sql = "select * from produto";
    $resposta = $conexao->query($sql);

    if(mysqli_num_rows($resposta) > 0){
        ?>

        <html>

            <head>
                <title>Lista de produtos</title>
                <meta charset="utf-8">
                <link rel="stylesheet" href="../css/estilo_tabela.css">
            </head>

            <body>
                <table>
                    <tr class="title_tr">
                        <td>CÓDIGO</td>
                        <td>NOME</td>
                        <td>QUANTIDADE</td>
                        <td>PREÇO</td>
                        <td colspan="2">OPÇÕES</td>
                    </tr>
                    <?php
                    
                        while($row = mysqli_fetch_assoc($resposta)){
                            ?>
                                <tr class="item_tr">
                                    <td> <?php echo $row["cod_prod"] ?> </td>
                                    <td> <?php echo $row["nome"] ?> </td>
                                    <td> <?php echo $row["quantidade"] ?> </td>
                                    <td> R$ <?php echo $row["preco"] ?> </td>
                                    <td> <a href="editar.php?cod_prod=<?php echo $row["cod_prod"] ?>">
                                        <img src="../img/icons/edit.svg" alt="Editar">
                                    </a> </td>
                                    <td> <a href="deletar.php?cod_prod=<?php echo $row["cod_prod"] ?>">
                                        <img src="../img/icons/delete.svg" alt="Excluir">
                                    </a> </td>
                                </tr>
                            <?php
                        }
                        ?>
                            <tr class="title_tr">
                                <td colspan="6">
                                    <a href="../index.html">Voltar</a>
                                </td>
                            </tr>
                        <?php
                    ?>
                </table>
            </body>

        </html>

        <?php
    }else{
        echo "Nenhum valor cadastrado!";
    }

    mysqli_close($conexao);

?>