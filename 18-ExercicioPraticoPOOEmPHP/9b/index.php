<?php
    require_once './Pessoa.php';
    require_once './Livro.php';

    $p = array();
    $l = array();

    $p[] = new Pessoa('Pedro', 22, 'M');
    $p[] = new Pessoa('Maria', 31, 'F');

    $l[] = new Livro('PHP Básico'  , 'José da Silva' , 300, $p[0]);
    $l[] = new Livro('POO com PHP' , 'Maria de Souza', 500, $p[0]);
    $l[] = new Livro('PHP Avançado', 'Ana Paula'     , 800, $p[1]);

    echo '<pre>';

    print_r($l[0]);
    print_r($l[1]);
    print_r($l[2]);

    $l[2]->abrir();
    $l[2]->folhear(100);
    // $l[0]->voltarPagina();
    $l[2]->detalhes();

    echo '</pre>';
?>