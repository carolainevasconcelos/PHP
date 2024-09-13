<html>
    <center>
    <h3>
        <?php
            $d = isset($_GET['ds']) ? $_GET['ds'] : 0;
            switch($d){
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Vai estudar!";
                    break;
                case 7:
                case 8:
                    echo "Pode descansar.";
                    break;
                default:
                    echo "Invalido";
            }
        ?>
        <br><a href="ex1-switch.html">Voltar</a>
    </h3>
    </center>
</html>