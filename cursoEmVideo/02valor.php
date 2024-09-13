<center>
    <h3>
        <?php
             $nome = $_GET["nome"];
             $ano = $_GET["ano"];
             $sexo = $_GET["sexo"];
             $idade = date("Y") - $ano; // serve para nao ter que mudar o codigo toda vez que mudar de ano
             echo "$nome tem $idade anos e é $sexo.";
        ?>
        <br><br>
        <a href="02valor.html">Voltar</a>
    </h3>
</center>