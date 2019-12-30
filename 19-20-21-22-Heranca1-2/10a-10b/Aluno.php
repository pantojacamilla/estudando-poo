<?php
    require_once 'Pessoa.php';

    class Aluno extends Pessoa{
        private $matricula;
        private $curso;

        // Métodos Personalizados
        public function cancelarMatricula(){
            echo 'Matrícula cancelada com sucesso';
        }


        // Métodos Especiais

        // Getters
        public function getMatricula(){
           return $this->matricula;
        }
        public function getCurso(){
            return $this->curso;
        }
 
        // Setters
        public function setMatricula($matricula){
           $this->matricula = $matricula;
        }
        public function setCurso($curso){
           $this->curso = $curso;
        }
    }
?>