<?php
  require_once './Animal.php';
  class Peixe extends Animal{

    private $corEscama;

    // Métodos Personalizados
    public function soltarBolha(){
      echo '<br>Soltando bolhas.....';
    }


    // Métodos Abstratos
    public function locomover(){
      echo '<br>Nadando...';
    }
    public function alimentar(){
      echo '<br>Comendo Substância...';
    }
    public function emitirSom(){
      echo '<br>Peixe não faz som...';

    }

    // Métodos Especiais
    // Getters
    public function getCorEscama(){
      return $this->corEscama;
    }

    // Setters
    public function setCorEscama($corEscama){
      $this->corEscama = $corEscama;
    }
  }
?>