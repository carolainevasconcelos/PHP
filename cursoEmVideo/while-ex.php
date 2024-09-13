<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Dinâmico</title>
</head>
<body>
<div>
    <center>
    <form action="while.php" method="get">
        <?php
        $i = 1; // Inicializa o contador
        while ($i <= 5) { // Cria 5 caixas de texto
            echo "Valor $i: <input type='number' name='v$i' id='v$i' max='100' min='0' value='0'><br><br>";
            $i++;
        }
        ?>
        <input type="submit" value="Enviar">
    </form>
    </center>
</div>
</body>
</html>
