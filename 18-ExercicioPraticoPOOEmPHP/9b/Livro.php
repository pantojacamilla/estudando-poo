<?php
   
   require_once './Pessoa.php';
   require_once './Publicacao.php';

   class Livro implements Publicacao{

      private $titulo;
      private $autor;
      private $totPaginas;
      private $pagAtual;
      private $aberto;
      private $leitor;

      // Métodos

      public function detalhes(){
         echo '<br>-------------DETALHES-------------<br>';
         echo 'Livro: ' . $this->getTitulo() . '<br>'; 
         echo 'Escrito por: ' . $this->getAutor() . '<br>';    
         echo 'Total de páginas: ' . $this->getTotPaginas() . '<br>';
         echo 'Sendo lido por: ' . $this->getleitor()->getNome() . '<br>';
         echo 'Página atual: ' . $this->getPagAtual() . '<br>';
         echo 'Progresso: ' . (($this->getPagAtual() / $this->getTotPaginas()) * 100) . '%';
      }

      // Métodos Abstratos

      public function abrir(){
         $this->setAberto(true);   
      }
      public function fechar(){
         $this->setAberto(false);
      }
      public function folhear($p){
         if ($p > $this->getTotPaginas()) {
            $this->setPagAtual(0);
         }else {
            $this->setPagAtual($p);
         }
      }
      public function avancarPagina(){
         if (($this->getPagAtual() + 1) < $this->getTotPaginas()) {
            $this->setPagAtual($this->getPagAtual() + 1);
         } else {
            echo '<br>Impossível avançar a página';
         }
      }
      public function voltarPagina(){
         if (($this->getPagAtual() - 1) > 0) {
            $this->setPagAtual($this->getPagAtual() - 1);
         } else {
            echo '<br>Impossível voltar a página';
         }
      }

      // Métodos Especiais

      // Contrutor
      public function __construct($titulo, $autor, $totPaginas, $leitor){
         $this->setTitulo($titulo);
         $this->setAutor($autor);
         $this->setTotPaginas($totPaginas);
         $this->setPagAtual(0);   
         $this->setAberto(false);
         $this->setleitor($leitor);
      }

      // Getters
      public function getTitulo(){
         return $this->titulo;
      }

      public function getAutor(){
         return $this->autor;
      }

      public function getTotPaginas(){
         return $this->totPaginas;
      }

      public function getPagAtual(){
         return $this->pagAtual;
      }

      public function getAberto(){
         return $this->aberto;
      }

      public function getleitor(){
         return $this->leitor;
      }

      // Setters

      public function setTitulo($titulo){
         $this->titulo = $titulo;
      }

      public function setAutor($autor){
         $this->autor = $autor;
      }

      public function setTotPaginas($totPaginas){
         $this->totPaginas = $totPaginas;
      }

      public function setPagAtual($pagAtual){
         $this->pagAtual = $pagAtual;
      }

      public function setAberto($aberto){
         $this->aberto = $aberto;
      }

      public function setleitor($leitor){
         $this->leitor = $leitor;
      }
   }
?>