<?php
    require_once './Mamifero.php';
    class Cachorro extends Mamifero{


        // Polimorfismo de "sobrecarga"
        // O php não suporta a sobrecarga de métodos então
        // uma maneira de utilizar os métodos
        public function reagirFrase($frase){
            $resultado = ($frase == 'toma comida' || $frase == 'Olá') ? 'Abanar e Latir':'Rosnar';
            echo '<br>' . $resultado;
        }

        public function reagirHoraMin($hora, $min){
            if ($hora > 12) {
                echo '<br>Abanar';
            }else if($hora >= 18) {
                echo '<br>Ignorar';
            }else {
                echo '<br>Abanar e Latir';
            }
        }

        public function reagirDono($dono){
            $resultado = ($dono) ? 'Abanar':'Rosnar e Latir';
            return '<br>' . $resultado;
        }

        public function reagirIdadePeso($idade, $peso){
            if ($idade < 5) {
                if ($peso < 10) {
                   echo '<br>Abanar';
                }else {
                   echo '<br>Latir';
                }    
            }else if($peso < 10){
                echo '<br>Rosnar';
            }else{
                echo '<br>Ignorar';
            }
        }


        // Sobrepondo o método emitir som de Mamífero
        // Polimorfismo de sobreposição
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