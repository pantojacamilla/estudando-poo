<?php

    
    class Caneta {
        // Atributos
        private $modelo;
        private $ponta;
        private $cor;
        private $tampada;


        // Contrututor
        // public function __construct() {
        //     $this->cor =  'Verde';
        //     $this->tampar();
        // }
    
        // public function Caneta(){
        //     $this->cor = 'Azul';
        //     $this->tampar();
        // }


        public function Caneta($m, $p, $c){
            $this->setModelo($m);
            $this->setPonta($p);
            $this->setCor($c);
            $this->tampar();
        }

        public function tampar(){
            $this->tampada =  true;

        }

        public function destampar(){
            $this->tampada = false;
        }

        // Getters (acessores)

        // Modelo
        public function getModelo(){
            return $this->modelo;
        }

        // Ponta
        public function getPonta(){
            return $this->ponta;
        }

        // Cor 
        public function getCor(){
            return $this->cor;
        }

        // Setters (modificadores)

        // Modelo
        public function setModelo($m){
            $this->modelo = $m;
        }

        // Ponta
        public function setPonta($p){
            $this->ponta = $p;
        }

        // Cor 
        public function setCor($c){
            $this->cor = $c;
        }
    }


?>