<?php
    /*
    1- PRIMEIRO VERIFICA SE O FORMULARIO ESTA FUNCIONANDO

    if(isset($_POST['submit'])){
        print_r($_POST['nome']);
        print_r($_POST['senha']);
        print_r($_POST['email']);
        print_r($_POST['sexo']);
        print_r($_POST['data_nascimento']);
    }
    */

    // 3- INCLUA A CONEXAO DO BANCO DE DADOS
    include_once('conexao.php');


    // 2- CRIE AS VARIAVEIS
    if (isset($_POST['submit'])) {
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $sexo = $_POST['sexo'];
        $data_nascimento = $_POST['data_nascimento'];

    // 4- CRIA A QUERY 
        $result = mysqli_query($conexao, "INSERT INTO usuarios (nome, senha, email, sexo, data_nascimento) VALUES ('$nome', '$senha', '$email', '$sexo', '$data_nascimento')");
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="cadastro-container">
        <h2>Cadastro</h2>
        <form action="cadastro.php" method="POST">
            <label for="cadastro-nome">Nome:</label>
            <input type="text" id="cadastro-nome" name="nome" required>

            <label for="cadastro-senha">Senha:</label>
            <input type="password" name="senha" id="cadastro-senha">
            
            <label for="cadastro-email">Email:</label>
            <input type="email" id="cadastro-email" name="email" required>
            
            <label for="cadastro-sexo">Sexo:</label>
            <select id="cadastro-sexo" name="sexo" required>
                <option value="" disabled selected>Selecione seu sexo</option>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                <option value="outro">Outro</option>
                <option value="prefiro_nao_dizer">Prefiro não dizer</option>
            </select>
            
            <label for="cadastro-dtnasc">Data de Nascimento:</label>
            <input type="date" id="cadastro-dtnasc" name="data_nascimento" required>
            
            <input style="background-color: #e91e63; color: white;" type="submit" value="Entrar" name="submit">
        </form>
        <p>Já tem uma conta? <a href="index.php">Faça login aqui</a>.</p>
    </div>
</body>
</html>