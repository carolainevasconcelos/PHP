<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<form action="" method="post">
        <center>
            <fieldset>
                <h3>Insira 3 valores:</h3>
                Valor 1: <input type="text" name="n1" id="n1"><br><br>
                Valor 2: <input type="text" name="n2" id="n2"><br><br>
                Valor 3: <input type="text" name="n3" id="n3"><br><br>
                <button type="submit" name="acao" value="ok">OK</button>
            </fieldset>
        </center>
    </form>
    <?php
        if (isset($_POST['acao']) && $_POST['acao'] == 'ok') { //O isset é usado para verificar se uma variável está definida e não é null
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];
            $n3 = $_POST["n3"];
            
            // Inclui o arquivo de resultado
            include('resultado-maior.php');
        }
    ?>
</body>
</html>