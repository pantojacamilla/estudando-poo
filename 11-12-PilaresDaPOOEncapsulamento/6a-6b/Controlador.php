<?php

    interface Controlador {

        // Métodos Abstratos

        // public abstract function ligar();
        public function ligar();
        public function desliga();
        public function abrirMenu();
        public function fecharMenu();
        public function maisVolume();
        public function menosVolume();
        public function ligarMudo();
        public function desligarMudo();
        public function play();
        public function pause();
    }
?>