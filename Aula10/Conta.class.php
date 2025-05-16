<?php
    class Conta{
        public $Nome;
        public $CPF;
        public $Saldo;

        public function Sacar($valor){
            if($valor>$this->Saldo){
                return "Saldo insuficiente";
            }else{
                $this->Saldo = $this->Saldo - $valor;
                $texto = "Op realizado com sucesso, saldo atual e R$".$this->Saldo;
                return $texto;
            }
        }


        public function Depositar($valor){
            $this->Saldo = $this->Saldo + $valor;
        }
        public function consultarSaldo(){
            echo "NOME " . $this->Nome . "<br>";
            echo "CPF " . $this->CPF . "<br>";
            echo "SALDO " . $this->Saldo . "<br>";
        }
    }

?>