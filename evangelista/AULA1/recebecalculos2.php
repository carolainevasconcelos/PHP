<?php
    //Saber se um valor é maior, menor ou igual a 20:
    $v= $_POST['valor1'];
    if($v > 20){
        echo('Valor digitado  maior que 20 ');
    }
    else if($v < 20){
        echo('Valor digitado  menor que 20 ');
    }
    else {
        echo('Valor digitado igual a 20');
    }
?>