<?php
require_once './Controlador.php';

    class ControleRemoto implements Controlador {
        // Atributos

        private $volume;
        private $ligado;
        private $tocando;

        // Métodos Especiais

        // Contrutor

        public function __construct(){
            $this->setVolume(50);
            $this->setLigado(false);
            $this->setTocando(false);
        }

        // Getter
        private function getVolume(){
            return $this->volume;
        }

        private function getLigado(){
            return $this->ligado;
        }

        private function getTocando(){
            return $this->tocando;
        }

        // Setters

        private function setVolume($volume){
            $this->volume = $volume;
        }

        private function setLigado($ligado){
            $this->ligado = $ligado;
        }

        private function setTocando($tocando){
            $this->tocando = $tocando;
        }

        // Implementação dos métodos abstratos

        public function ligar(){
            $this->setLigado(true);
        }
        public function desliga(){
            $this->setLigado(false);
        }
        public function abrirMenu(){
            echo '<br>------MENU------';
            echo "<br>Está Ligado? " . ($this->getLigado()?"SIM":"NÃO");
            echo "<br>Está Tocando? " . ($this->getTocando()?"SIM":"NÃO");
            echo "<br>Volume: " . $this->getVolume();
            echo ' (';
            for($i = 1; $i <= $this->getVolume(); $i=$i+10){
                echo '|';
            }
            echo ')';
            echo '<br>';
         
        }
        public function fecharMenu(){
            echo '<br>Fechando Menu....<br>';
        }
        public function maisVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() + 1);
            }else{
               echo 'ERRO não posso aumentar o volume ! <br>';
            }
        }
        public function menosVolume(){
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume() - 1);
            }else{
                echo 'ERRO não posso diminuir o volume ! <br>';
             }
        }
        public function ligarMudo(){
            if ($this->getLigado() && $this->getVolume() > 0) {
                $this->setVolume(0);
            }
        }
        public function desligarMudo(){
            if ($this->getLigado() && $this->getVolume() == 0) {
                $this->setVolume(50);
            }
        }
        public function play(){

        }
        public function pause(){

        }


    }
?>