<?php
if (!empty($_GET['id'])) {
    include_once('conexao.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    // print_r($result);

    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $nome = $user_data['nome'];
            $senha = $user_data['senha'];
            $email = $user_data['email'];
            $sexo = $user_data['sexo'];
            $data_nascimento = $user_data['data_nascimento'];
        }
        // print_r($nome);
    } else {
        header('Location: sistema.php');
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="saveEdit.php" method="POST">
        <h1>Editar Usuário</h1>
        <div>
            <label for="nome">Nome:</label>
            <input type="text" value="<?php echo $nome; ?>" id="nome" name="nome" required>
        </div>
        <br>
        <div>
            <label for="senha">Senha:</label>
            <input type="password" value="<?php echo $senha; ?>" id="senha" name="senha" required>
        </div>
        <br>
        <div>
            <label for="email">Email:</label>
            <input type="email" value="<?php echo $email; ?>" id="email" name="email" required>
        </div>
            <br>
            <div>
                <label>Sexo:</label>
                <input type="radio" id="sexo_masculino" name="sexo" value="masculino" <?php echo $sexo == 'masculino' ? 'checked' : ''; ?> required>
                <label for="sexo_masculino">Masculino</label>
                <input type="radio" id="sexo_feminino" name="sexo" value="feminino" <?php echo $sexo == 'feminino' ? 'checked' : ''; ?>>
                <label for="sexo_feminino">Feminino</label>
            </div>
            <br>
            <div>
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" value="<?php echo $data_nascimento; ?>" id="data_nascimento" name="data_nascimento" required>
            </div>

            <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Campo oculto para ID -->

            <input type="submit" name="update" id="submit">
    </form>
    <div>
        <a href="sistema.php">Voltar</a>
    </div>
</body>

</html>