<html>
    <center>
    <h3>
        <?php
        /*
            $ano = isset($_GET['ano'])?$_GET['ano']:1900;
            $idade = date("Y") - $ano;
            echo "Voce nasceu em $ano e tem $idade anos.<br>";

            if($idade >= 18){
                $voto = "ja pode votar";
                $dirigir = "ja pode dirigir";
            }
            else{
                $voto = "nao pode votar";
                $dirigir = "nao pode dirigir";
            }
            echo "Com essa idade voce $voto e tambem $dirigir."
        */

        /*
        $ano = isset($_GET['ano']) ? $_GET['ano'] : 1900;
        $idade = date("Y") - $ano;

        echo "Você nasceu em $ano e tem $idade anos.<br>";

        if ($idade < 16) {
            $tipovoto = "não vota";
        } elseif (($idade >= 16 && $idade < 18) || ($idade > 65)) {
            $tipovoto = "voto opcional";
        } else {
            $tipovoto = "voto obrigatório";
        }

        echo "Seu tipo de voto é: $tipovoto";
        */

        $n1 = isset($_GET['n1']) ? $_GET['n1'] : 0;
        $n2 = isset($_GET['n2']) ? $_GET['n2'] : 0;
        $media = ($n1 + $n2)/2;

        echo "Sua media e $media<br>";

        if ($media >= 6){
            $sit = "aprovado";
        }
        else {
            $sit = "reprovado";
        }

        echo "$sit";
        ?>
    </h3>
    </center>
</html>
