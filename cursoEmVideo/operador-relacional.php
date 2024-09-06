<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores passados foram $n1 e $n2<br>";
        $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2; // se tipo = a s entao o valor sera somado, se nao sera multiplicado
        echo "O resultado sera $r";
        */

        $a = 3;
        $b = "3";
        $r = ($a === $b) ? "sim":"nao";
        echo "As variaveis A e B sao identicas? $r";
    ?>
</body>
</html>