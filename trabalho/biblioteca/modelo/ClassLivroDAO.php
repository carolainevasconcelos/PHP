<?php
require_once 'Conexao.php';
require_once 'ClassLivro.php';

class ClassLivroDAO {

    // cadastrar os livro
    public function cadastrar(ClassLivro $livro) {
        try {
            global $conexao;  // Usando a conexão global
            $sql = "INSERT INTO livros (titulo, autor, ibsn, ano, genero, editora, descricao) 
                    VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conexao->prepare($sql);
            $stmt->bind_param('sssssss', 
                $livro->getTitulo(), 
                $livro->getAutor(), 
                $livro->getIbsn(), 
                $livro->getAno(), 
                $livro->getGenero(), 
                $livro->getEditora(), 
                $livro->getDescricao()
            );
            return $stmt->execute();
        } catch (Exception $exc) {
            echo $exc->getMessage();
            return false;
        }
    }

    // listar os livros
    public function listarLivros() {
        try {
            global $conexao;  // Usando a conexão global
            $sql = "SELECT * FROM livros ORDER BY titulo ASC";
            $result = $conexao->query($sql);
            return $result->fetch_all(MYSQLI_ASSOC);
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
}
?>