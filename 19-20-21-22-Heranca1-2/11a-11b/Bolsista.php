<?php

    require_once './Aluno.php';
    class Bolsista extends Aluno {
        private $bolsa;
        
        public function renovarBolsa(){
            echo 'Bolsa renovada<br>';
        }

        public function pagarMensalidade(){
            echo $this->getNome() . ' é bolsista e paga com desconto';
        }

        // Métodos Especiais

        // Getter 
        public function getBolsa(){
           return $this->bolsa;
        }

        // Setter
        public function setBolsa($bolsa){
           $this->bolsa = $bolsa;
        }
    }






?>