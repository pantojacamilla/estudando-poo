<?php

  require_once './AcoesVideo.php';
  class Video implements AcoesVideo{

    private $titulo;
    private $avaliacoes;
    private $views;
    private $likes;
    private $dislikes;
    private $reproduzindo;


    // Implementando do os métodos abstratos da interface
    
    public function play(){
      $this->setReproduzindo(true);
    }
    public function pause(){
      $this->setReproduzindo(false);
    }
    public function like(){
      $this->setLikes($this->getLikes() + 1);
    }
    public function dislike(){
      $this->setDislikes($this->getDislikes() + 1);
    }


    // Métodos Especiais 
    // Método Contrutor

    public function __construct($titulo){
      $this->setTitulo($titulo);
      $this->setAvaliacoes(1);
      $this->setViews(0);
      $this->setLikes(0);
      $this->setDislikes(0);
      $this->setReproduzindo(false);
    }

    // Getters e Setters
    public function getTitulo(){
      return $this->titulo;
    }

    public function setTitulo($titulo){
      $this->titulo = $titulo;
    }

    public function getAvaliacoes(){
      return $this->avaliacoes;
    }

    public function setAvaliacoes($avaliacoes){
      $this->avaliacoes = $avaliacoes;
    }

    public function getViews(){
      return $this->views;
    }

    public function setViews($views){
      $this->views = $views;
    }

    public function getLikes(){
      return $this->likes;
    }

    public function setLikes($likes){
      $this->likes = $likes;
    }

    public function getDislikes(){
      return $this->dislikes;
    }

    public function setDislikes($dislikes){
      $this->dislikes = $dislikes;
    }

    public function getReproduzindo(){
      return $this->reproduzindo;
    }

    public function setReproduzindo($reproduzindo){
      $this->reproduzindo = $reproduzindo;
    }
  }
?>