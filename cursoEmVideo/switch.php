<html>
    <center>
    <h3>
        <?php
            $n = isset($_GET['num']) ? $_GET['num'] : 0;
            $o = isset($_GET['oper']) ? $_GET['oper'] : 1;

            switch($o){
                case 1:
                    $r = $n * 2;
                    break;
                case 2:
                    $r = $n ^ 3;
                    break;
                case 3:
                    $r = sqrt($n); // $n ^ (1/2);
                    //no ultimo nao precisa usar break
            }

            echo "Resultado: $r";
        ?>
    </h3>
    </center>
</html>