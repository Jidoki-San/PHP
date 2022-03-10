<?php

    $idade = 0;

    if($idade <= 12){
        echo "<h1>Criança</h1>";
    }else if($idade >= 13 and $idade <= 29){
        echo "<h1>Jovem!<h1>";
    }else if ($idade >= 30 and $idade <=59){
        echo "<h1>Adulto!<h1>";
    }else{
        echo "<h1>Idoso!<h1>";
    }
?>