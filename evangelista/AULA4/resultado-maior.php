<?php
    function maior($n1, $n2, $n3) {
        if ($n1 >= $n2 && $n1 >= $n3) {
            return $n1;
        } elseif ($n2 >= $n1 && $n2 >= $n3) {
            return $n2;
        } else {
            return $n3;
        }
    }

    // Verifica se as variáveis estão definidas e não estão vazias
    if (isset($n1) && isset($n2) && isset($n3) && !empty($n1) && !empty($n2) && !empty($n3)) {
        // Converte os valores para inteiros antes de comparar
        $n1 = (int)$n1;
        $n2 = (int)$n2;
        $n3 = (int)$n3;

        $maior = maior($n1, $n2, $n3);
        echo "<center><h2>O maior número é: $maior</h2></center>";
    } else {
        echo "<center><h2>Por favor, insira todos os três valores.</h2></center>";
    }
?>