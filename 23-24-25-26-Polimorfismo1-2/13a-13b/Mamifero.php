<?php
  require_once './Animal.php';
  class Mamifero extends Animal{
    protected $corPelo;

    // Métodos Abstratos
    public function locomover(){
      echo '<br>Correndo...';
    }
    public function alimentar(){
      echo '<br>Mamando...';             
    }
    public function emitirSom(){
      echo '<br>Som de mamífero...';
    }

    // Métodos Especiais
    // Getters
    public function getCorPelo(){
      return $this->corPelo;
    }
    // Setters
    public function setCorPelo($corPelo){
      $this->corPelo = $corPelo;
    }
  }
?>