<?php

    include("conexao.php");

    $arquivo = $_FILES['i_img'];
    $tamanho = $arquivo['size'] * 0.001;
    $pasta = "../upload/";
    $nome = $arquivo['name'];
    $novo_nome = uniqid();
    $extensao = strtolower(pathinfo($nome, PATHINFO_EXTENSION));
    $caminho = $pasta . $novo_nome . "." . $extensao;

    if($tamanho <= 2000){
        if($extensao == "png" || $extensao == "jpg" || $extensao == "svg"){
            $move = move_uploaded_file($arquivo['tmp_name'], $caminho);
        }else{
            echo "O arquivo não é uma imagem!";
        }
    
        if($move){
            $sql = "insert into imagem (caminho, data_upload) values ('$caminho', NOW())";
            $conexao->query($sql);
            header("Location: lista.php");
        }
    }else{
        echo "Imagem é muito grande!";
    }

?>