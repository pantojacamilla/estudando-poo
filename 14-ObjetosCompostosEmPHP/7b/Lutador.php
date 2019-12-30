<?php
    class Lutador {
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria; //leve , médio, pesado
        private $vitorias;
        private $derrotas;
        private $empates;


        // Métodos

        public function apresentar(){
            echo '<br>Lutador: '    . $this->getNome();
            echo '<br>Origem: '     . $this->getNacionalidade();
            echo '<br>' . $this->getIdade()  . ' Anos';
            echo '<br>' . $this->getAltura() . 'm de Altura';
            echo '<br>Pesando: '    . $this->getPeso() . 'Kg';
            echo '<br>Ganhou: '     . $this->getVitorias();
            echo '<br>Perdeu: '     . $this->getDerrotas();
            echo '<br>Empatou: '    . $this->getEmpates();

        }

        public function status(){
            echo $this->getNome();
            echo ' é um peso ' . $this->getCategoria();
            echo ' e tem ' . $this->getVitorias() . ' Vitória(s),';
            echo ' ' .$this->getDerrotas() . ' Derrota(s)';
            echo ' e ' .$this->getEmpates()  . ' Empate(s)<br>';
        }

        public function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }



        // Métodos especiais

        // Contrutor
        public function __construct($nome, $nacio, $idade, $altura, $peso, $vito, $derro, $empates){
            $this->setNome($nome);
            $this->setNacionalidade($nacio);
            $this->setIdade($idade);
            $this->setAltura($altura);
            $this->setPeso($peso);
            $this->setVitorias($vito);
            $this->setDerrotas($derro);
            $this->setEmpates($empates);
        }

        // Getters

        public function getNome(){
            return $this->nome;
        }
        public function getNacionalidade(){
            return $this->nacionalidade;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function getAltura(){
            return $this->altura;
        }
        public function getPeso(){
            return $this->peso;
        }
        public function getCategoria(){
            return $this->categoria;
        }
        public function getVitorias(){
            return $this->vitorias;
        }
        public function getDerrotas(){
            return $this->derrotas;
        }
        public function getEmpates(){
            return $this->empates;
        }



        // Setters

        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setNacionalidade($nacionalidade){
            $this->nacionalidade = $nacionalidade;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }
        public function setAltura($altura){
            $this->altura = $altura;
        }
        public function setPeso($peso){
            $this->peso = $peso;
            $this->setCategoria();
        }
        private function setCategoria(){
            if ($this->peso < 52.2) {
                $this->categoria = 'Inválida';
            }else if ($this->peso <= 70.3){
                $this->categoria = 'Leve';
            }else if ($this->peso <= 83.9){
                $this->categoria = 'Médio';
            }else if ($this->peso < 120.2){
                $this->categoria = 'Pesado';
            }else {
                $this->categoria = 'Inválida';
            } 
        }
        public function setVitorias($vitorias){
            $this->vitorias = $vitorias;
        }
        public function setDerrotas($derrotas){
            $this->derrotas = $derrotas;
        }
        public function setEmpates($empates){
            $this->empates = $empates;
        }
        
        







    }
?>