<?php

  require_once 'Pessoa.php';
  class Gafanhoto extends Pessoa{
    private $login;
    private $totAssistindo;
    
    
    // Métodos Personalizados
    public function assistirMaisUm(){
      $this->setTotAssistindo($this->getTotAssistindo() + 1);
    }

    // Métodos Especiais
    // Método Contstrutor
    public function __construct($nome, $idade, $sexo, $login) {
      // Chamada ao contrutor da classe mãe
      parent::__construct($nome,$idade, $sexo);
      $this->setLogin($login);
      $this->setTotAssistindo(0);
    }
    // Getters e Setters
    public function getLogin(){
      return $this->login;
    }

    public function setLogin($login){
      $this->login = $login;
    }

    public function getTotAssistindo(){
      return $this->totAssistindo;
    }

    public function setTotAssistindo($totAssistindo){
      $this->totAssistindo = $totAssistindo;
    }
  }
?>