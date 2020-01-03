<?php
  require_once './Animal.php';
  class Reptil extends Animal{

    private $corEscama;
    
    // Métodos Abstratos
    public function locomover(){
      echo '<br>Rastejando...';
    }
    public function alimentar(){
      echo '<br>Comendo Vegetais...';
    }
    public function emitirSom(){
      echo '<br>Som de Reptil...';        
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