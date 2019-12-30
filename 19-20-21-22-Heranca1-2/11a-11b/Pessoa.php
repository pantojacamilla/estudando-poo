<?php
    require_once 'InterfaceTeste.php';

    abstract class Pessoa implements InterfaceTeste{
        private $nome;
        private $idade;
        private $sexo;

        // Métodos
        public function fazerAniversario(){
            $this->setIdade($this->getIdade() + 1);
        }
        
        // Métodos abstratos
        public function teste(){
            echo 'teste1';
        }

        // Métodos Especiais
        // Getters
        public function getNome(){
           return $this->nome;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function getSexo(){
            return $this->sexo;
        }
 
        // Setters
        public function setNome($nome){
           $this->nome = $nome;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        } 
        public function setSexo($sexo){
           $this->sexo = $sexo;
        }
    }







?>