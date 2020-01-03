<?php
    require_once 'Video.php';
    require_once 'Gafanhoto.php';

    class Visualizacao {
        // do Tipo Gafanhoto
        private $espectador;

        // do Tipo Video
        private $filme;

        // Métodos Personalizados
        public function avaliar(){
          $this->getFilme()->setAvaliacoes(5);
        }

        public function avaliarNota($nota){
          $this->getFilme()->setAvaliacoes($nota);
        }
        public function avaliarPorc($porc){
          if ($porc <= 20) {
            $this->getFilme()->setAvaliacoes(3);
          }else if($porc <= 50) {
            $this->getFilme()->setAvaliacoes(5);
          }else if($porc <= 90){
            $this->getFilme()->setAvaliacoes(8);
          }else{
            $this->getFilme()->setAvaliacoes(10);
          }
        }

        // Métodos Especiais
        // Método Construtor
        public function __construct($espectador, $filme){
          $this->setEspectador($espectador);
          $this->setFilme($filme);
          $this->getEspectador()->assistirMaisUm();
          $this->getFilme()->setViews($this->getFilme()->getViews() + 1);
        }

        // Getters e Setters
        public function getEspectador(){
          return $this->espectador;
        }

        public function setEspectador($espectador){
          $this->espectador = $espectador;
        }

        public function getFilme(){
          return $this->filme;
        }

        public function setFilme($filme){
          $this->filme = $filme;
        }
    }
?>