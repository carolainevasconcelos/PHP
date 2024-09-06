<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1 + $nota2) / 2;
        echo "A média de $nota1 e $nota2 é $m<br>";
        echo "A situação do aluno é " . (($m < 6) ? "reprovado" : "aprovado");    
    ?>
</body>
</html>