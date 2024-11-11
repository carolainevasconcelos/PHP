<?php
// Incluindo o arquivo de conexão
require_once '../modelo/conexao.php';
require_once '../modelo/ClassLivro.php';
require_once '../modelo/ClassLivroDAO.php';

// Verifica se o formulário foi enviado
if (isset($_POST['acao']) && $_POST['acao'] == 'cadastrar') {
    // Criação do objeto livro
    $livro = new ClassLivro();
    $livro->setTitulo($_POST['titulo']);
    $livro->setAutor($_POST['autor']);
    $livro->setIbsn($_POST['ibsn']);
    $livro->setAno($_POST['ano']);
    $livro->setGenero($_POST['genero']);
    $livro->setEditora($_POST['editora']);
    $livro->setDescricao($_POST['descricao']);

    // Criar o DAO para interagir com o banco de dados
    $livroDAO = new ClassLivroDAO();

    // Tentar cadastrar o livro
    if ($livroDAO->cadastrar($livro)) {
        // Caso o cadastro seja bem-sucedido, redireciona para uma página de sucesso ou lista de livros
        header("Location: ../visao/sucesso.php"); // Página de sucesso (ou onde preferir)
        exit;
    } else {
        // Caso haja erro no cadastro, exibe mensagem de erro
        echo "Erro ao cadastrar o livro!";
    }
}
?>
