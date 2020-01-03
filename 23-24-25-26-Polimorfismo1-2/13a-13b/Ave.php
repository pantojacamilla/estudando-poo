<?php
  require_once './Animal.php';
  class Ave extends Animal{

    private $corPena;

    // Métodos Personalizados

    public function fazerNinho(){
      echo '<br>Contruindo um ninho';
    }
    
    // Métodos Abstratos
    public function locomover(){
      echo '<br>Voando...';
    }
    public function alimentar(){
      echo '<br>Comendo frutas...';
    }
    public function emitirSom(){
      echo '<br>Som de Ave...';     
    }

    // Métodos Abstratos
    // Getters
    public function getCorPena(){
      return $this->corPena;
    }
    
    // Setters
    public function setCorPena($corPena){
      $this->corPena = $corPena;
    }
  }
?>