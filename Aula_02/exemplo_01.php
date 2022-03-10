<html>

    <head>
        <title>Exemplo - 01</title>
        <meta charset=""utf-8>
        <style>
            div{
                width: 100px;
                height: 100px;
            }
        </style>
    </head>

    <body>
        <?php   
            function criando_div($bg_color){
                echo "<div style='background-color:".$bg_color.";'></div";
            }

            criando_div("red");
            criando_div("green");
        ?>
    </body>

</html>