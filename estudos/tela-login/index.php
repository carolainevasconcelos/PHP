<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="login-container">
        <h2>Login</h2>
        <form action="testeLogin.php" method="POST">
            <label for="login-email">Email:</label>
            <input type="email" id="login-email" name="email" required>
            
            <label for="login-password">Senha:</label>
            <input type="password" id="login-password" name="senha" required>
            
            <input style="background-color: #e91e63; color: white;" type="submit" value="Entrar" name="submit">
        </form>
        <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se aqui</a>.</p>
    </div>
</body>
</html>