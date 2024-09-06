<?php
    //variaveis referenciadas
    /*
    $a = 3;
    $b = &$a;
    $b += 5;

    echo "A variavel A vale $a";
    echo "<br>A variavel B vale $b";
    */

    //variaveis de variaveis
    $site = "curso";
    $$site = "cursoPHP";

    echo "O conteúdo da variável curso é $curso"; // Correto, acessa $curso, que foi criada dinamicamente

    echo "<br>A variável \$site recebeu o valor $site"; // Mostra o valor da variável $site
    
    echo "<br>A variável criada recebeu o valor $curso"; // Correto, $curso foi criada e tem o valor "cursoPHP"
?>