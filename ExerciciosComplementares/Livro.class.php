<?php
class Livro {
    private $titulo;
    private $autor;
    private $disponivel;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponivel = true;
    }

    public function emprestar() {
        $this->disponivel = false;
    }

    public function devolver() {
        $this->disponivel = true;
    }

    public function exibirStatus() {
        if ($this->disponivel) {
            return "Título: $this->titulo - Disponível";
        } else {
            return "Título: $this->titulo - Emprestado";
        }
    }
}
?>
