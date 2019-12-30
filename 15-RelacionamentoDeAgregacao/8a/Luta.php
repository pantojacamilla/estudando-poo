<?php
    require_once './Lutador.php';
    class Luta{
        
        // private $desafiado: Lutador;
        // private Lutador $desafiante;
        private $rounds;
        private $aprovada;

        /* Lutas só podem ser marcadas
            entre mesmas categorias

            Desafiado e desafiante devem
            ser lutadores diferentes

            Lutas só podem acontecer se 
            forem aprovadas

            Os resultados aceitos são
            Vitória e empate
        */
        // Métodos
        public function marcarLuta(){

        }

        public function lutar(){

        }


        // Métodos Especiais
        // Getters
        public function getRounds(){
            return $this->rounds;
        }
        public function getAprovada(){
            return $this->aprovada;
        }

        // Setters
        public function setRounds($rounds){
            $this->rounds = $rounds;
        }
        public function setAprovada($aprovada){
            $this->aprovada = $aprovada;
        }
    
         
      

     
    }


?>