<?php
    require_once './Lutador.php';

    class Luta{
        
        private $desafiado;
        private $desafiante;
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
        public function marcarLuta($l1, $l2){
            if ($l1->getCategoria() === $l2->getCategoria() && $l1!=$l2) {
                $this->setAprovada(true);
                $this->setDesafiado($l1);
                $this->setDesafiante($l2);
            }else {
              $this->setAprovada(false);
              $this->setDesafiado(null);
              $this->setDesafiante(null);
            } 
        }

        public function lutar(){
            if ($this->getAprovada()) {
                // $this->getDesafiado()->apresentar();
                // $this->getDesafiante()->apresentar();
                $this->desfiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0,2);
                switch ($vencedor) {    
                    case '0':
                        echo '<p>EMPATOU!</p>';
                        // $this->getDesafiado()->empatarLuta();
                        // $this->getDesafiante()->empatarLuta();
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;
                    case '1':
                        echo '<br><p>' . $this->getDesafiado()->getNome() . ' VENCEU</p>';
                        // $this->getDesafiado()->ganharLuta();
                        // $this->getDesafiante()->perderLuta();
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;
                    case '2':
                        echo '<br><p>' . $this->getDesafiante()->getNome(). ' VENCEU</p>';
                        // $this->getDesafiante()->ganharLuta();
                        // $this->getDesafiado()->perderLuta();
                        $this->desafiante->ganharLuta();
                        $this->desafiado->perderLuta();
                        break;    
                }

            } else {
                echo 'A luta não pode acontecer !';
            }
            
        }

        // Métodos Especiais
        // Getters

        public function getDesafiado(){
            return $this->desafiado;
        }
        public function getDesafiante(){
            return $this->desafiante;
        }
        public function getRounds(){
            return $this->rounds;
        }
        public function getAprovada(){
            return $this->aprovada;
        }

        // Setters
        public function setDesafiado($desafiado){
            $this->desafiado = $desafiado;
        }
        public function setDesafiante($desafiante){ 
            $this->desafiante = $desafiante;
        }
        public function setRounds($rounds){
            $this->rounds = $rounds;
        }
        public function setAprovada($aprovada){
            $this->aprovada = $aprovada;
        }
    }
?>