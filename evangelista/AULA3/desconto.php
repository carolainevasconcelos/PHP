<!--HTML apenas para melhorar a saída do PHP-->
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    <center>
        <h1>
        <!--Código PHP-->
        <?php
        
        //Funcao da calculadora:
        function calcular($n1, $n2){ //a vista
            if ($n2 <= 1){
                $nd = $n1 * 0.05;
                $nt = $n1 - $nd;
                echo ("Valor a pagar: R$$nt");
            }
            elseif ($n2 > 0 && $n2 < 4 ){ //ate 3x
                $nd = $n1 * 0.05;
                $nt = $n1 - $nd;
                echo ("Valor a pagar: R$$nt");
            }
            elseif ($n2 >= 4){ //acima de 3x
                $nd = $n1 * 0.10;
                $nt = $n1 + $nd;
                echo ("Valor a pagar: R$$nt");
            }
            else{
                echo "Tente novamente";
            }
        }

        //Chamando a funcao
        calcular($n1 = $_POST ["n1"], $n2 = $_POST ["n2"])
        ?>
                <br>
                <a href="site.php"> voltar </a> 
                </h1>
    </center>
    </body>
</html>