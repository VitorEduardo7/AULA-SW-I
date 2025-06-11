<?php
    class Aluno {
        private $Nome;
        private $Nota1;
        private $Nota2;

        public function __construct($Nome, $n1, $n2) {
            $this->Nome = $Nome;
            $this->Nota1 = $n1;
            $this->Nota2 = $n2;
        }

        public function getNome() {
            return $this->Nome;
        }

        public function Media() {
            $media = ($this->Nota1 + $this->Nota2) / 2;
            return $media;
        }

        public function VerificarSituacao() {
            $media = $this->Media();
            if ($media >= 7) {
                return "APROVADO";
            } else {
                return "REPROVADO";
            }
        }

        public function getNota1() {
            return $this->Nota1;
        }

        public function getNota2() {
            return $this->Nota2;
        }
    }
?>
