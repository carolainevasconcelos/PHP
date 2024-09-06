<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // logica computacional
        $ano = $_GET["an"];
        $idade = 2024 - $ano;
        echo "Quem nasceu em $ano tem $idade anos<br>";
        $tipo = ($idade >= 18 && $idade <= 65)?"obriagtorio":"nao obrigatorio";
        echo "Seu voto e $tipo";
    ?>
</body>
</html>