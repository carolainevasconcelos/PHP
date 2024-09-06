<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    include('resultado.php');
    ?>
</head>
<body>
    <form action="" method="post">
        <center>
            <fieldset>
                <h3>Calculadora</h3>
                Numero 1: <input type="text" name="n1" id="n1"><br><br>
                Numero 2: <input type="text" name="n2" id="n2"><br><br>
                <button type="submit" name="acao" value="somar">somar</button>
            </fieldset>
        </center>
    </form>
    <?php
        calcular(@$_POST["n1"], @$_POST["n2"], @$_POST["acao"]);
    ?> 
</body>
</html>
