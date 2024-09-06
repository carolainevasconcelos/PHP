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
        $preco = $_GET["p"];
        echo "O preco do produto e R$ $preco";

        $preco += $preco*10/100; //esse += esta no lugar de ... = $preco + ...
        echo "<br>E o preco com 10% de aumento e de R$ $preco";

        $preco -= $preco*10/100; //esse -= esta no lugar de ... = $preco - ...
        echo "<br>E o preco com 10% de desconto e de R$ $preco";
        */

        $atual = $_GET["aa"];
        
        // Exibe o ano atual e o ano anterior com pré-decremento
        echo "O ano atual é $atual e o ano anterior é " . (--$atual);

        // Exibe o ano atual e o ano anterior com pós-decremento
        echo "<br>O ano atual é $atual e o ano anterior é " . ($atual--);

        // O valor de $atual foi alterado pelo pós-decremento acima, então é necessário exibir o ano atual atualizado
        echo "<br>O ano atual é $atual e o ano anterior é " . ($atual);

        // Exibe o ano atual e o ano anterior com pré-incremento
        echo "<br>O ano atual é " . (++$atual) . " e o ano anterior é " . $atual;

        // Exibe o ano atual e o ano anterior com pós-incremento
        echo "<br>O ano atual é $atual e o ano anterior é " . ($atual++);
        
    ?>
</body>
</html>