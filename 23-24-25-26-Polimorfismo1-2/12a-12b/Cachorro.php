<?php
    require_once './Mamifero.php';
    class Cachorro extends Mamifero{

        // SobrePondo o método emitir som de Mamífero

        public function emitirSom(){
            echo '<br>Au Au Au Au...';
        }

        // Métodos Personalizados
        public function enterrarOsso(){
            echo '<br>Enterrando Osso...';
        }

        public function abanandoRabo(){
            echo '<br>Abanando o rabo...';
        }
    }
?>