<?php
    require_once 'Pessoa.php';

    class Funcionario extends Pessoa{
        private $setor;
        private $trabalhando;

        // Métodos Personalizados
        public function trabalhando(){
            $this->setTrabalhando(!$this->getTrabalhando());
        }

        // Métodos Especiais
        // Getters 
        public function getSetor(){
            return $this->setor;
        }
        public function getTrabalhando(){
           return $this->trabalhando;
        }

        // Setters 
        public function setTrabalhando($trabalhando){
           $this->trabalhando = $trabalhando;
        }
        public function setSetor($setor){
           $this->setor = $setor;
        }
    }
?>