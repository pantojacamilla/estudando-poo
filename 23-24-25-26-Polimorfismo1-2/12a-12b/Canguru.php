<?php
    require_once './Mamifero.php';
    class Canguru extends Mamifero{

        // Métodos Personalizados
        public function usarBolsa(){
            echo '<br>Usando Bolsa';
        }

        public function locomover(){
            echo '<br>Saltando...';
        }
    }
?>