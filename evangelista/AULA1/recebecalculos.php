<?php
    //Contar ate o numero escolhido:
    $v= $_POST['valor1'];
    for($cont=1; $cont<$v; $cont++){
        echo('<p>valor atual '.$cont);
    }
?>