<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Livro</title>
    <link rel="stylesheet" href="css/style-cadastro.css">
</head>
<body>
    <header>
        <h1>Cadastro de Livros</h1>
    </header>

    <section class="form-container">
        <h2>Cadastrar Livro</h2>
        <form action="../controle/LivroControle.php" method="POST">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo" required>

            <label for="autor">Autor:</label>
            <input type="text" name="autor" id="autor" required>

            <label for="autor">IBSN:</label>
            <input type="text" name="ibsn" id="ibsn" required>

            <label for="ano">Ano de Publicação:</label>
            <input type="number" name="ano" id="ano" required>

            <label for="genero">Gênero:</label>
            <input type="text" name="genero" id="genero" required>

            <label for="editora">Editora:</label>
            <input type="text" name="editora" id="editora">

            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" rows="4"></textarea>

            <button type="submit" name="acao" value="cadastrar">Cadastrar</button>
        </form>
    </section>

    <footer>
        &copy; 2024 Biblioteca Online
    </footer>
</body>
</html>