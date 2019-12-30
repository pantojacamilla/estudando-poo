<?php
    require_once 'Pessoa.php';
    require_once 'Visitante.php';
    require_once 'Aluno.php';
    require_once 'Bolsista.php';
  
    

    $p = array();

    $p[] = new Visitante();

    $p[] = new Bolsista();

    echo '<pre>';

        print_r($p[0]);
        // $p->teste();
        print_r($p[1]);
        $p[1]->renovarBolsa();
        $p[1]->pagarMensalidade();
      

    echo '</pre>';






?>