<?php

    
    class Caneta {
        // Atributos
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;


        // Métodos
        public function rabiscar() {
            if ($this->tampada == true) {
                echo '<p>Erro! Não posso rabiscar</p>';
            }else {
                echo 'Estou rabiscando.... !!!';
            }   

        }

        private function tampar() {
            // tampada é um atributo protegido, que está sendo acessado pelo método pertencente a mesma Classe
            $this->tampada = true;
        }

        private function destampar() {
            // tampada é um atributo protegido, que está sendo acessado pelo método pertencente a mesma Classe
            $this->tampada = false;
        }





    }


?>