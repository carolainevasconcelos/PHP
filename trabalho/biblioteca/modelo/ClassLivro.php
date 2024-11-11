<?php
class ClassLivro {
    private $id;
    private $titulo;
    private $autor;
    private $ibsn;
    private $ano;
    private $genero;
    private $editora;
    private $descricao;

    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getIbsn() {
        return $this->ibsn;
    }

    public function getAno() {
        return $this->ano;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function getEditora() {
        return $this->editora;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setIbsn($ibsn) {
        $this->ibsn = $ibsn;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function setEditora($editora) {
        $this->editora = $editora;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
}
?>
