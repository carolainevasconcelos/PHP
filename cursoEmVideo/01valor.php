<center>
<h3>
<?php
    $valor = $_GET["v"];
    $rq = sqrt($valor);
    echo "A raiz de $valor e igual ".number_format($rq,2);
?>
</h3>
</center>