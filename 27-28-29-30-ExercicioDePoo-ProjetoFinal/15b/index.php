<?php

    require_once 'Video.php';
    require_once 'Gafanhoto.php'; 
    require_once 'Visualizacao.php';


    $v =  array();
    $g =  array();
    $visualizacao = array();

    $v[] = new Video('Aula 1 POO');
    $v[] = new Video('Aula 12 de PHP');
    $v[] = new Video('Aula 15 de HTML 5');



    // echo '<pre>';
    //     print_r($v[0]);
    // echo '</pre>';


    $g[] =  new Gafanhoto('Joana', 18, 'F', 'Joaninha');
    $g[] =  new Gafanhoto('Tio', 22, 'M', 'Tiozinho');

    
    // echo '<pre>';
    //     print_r($g[0]); 
    // echo '</pre>';

    $visualizacao[] = new Visualizacao($g[0],$v[0]);
    $visualizacao[] = new Visualizacao($g[0],$v[0]);

    $visualizacao[0]->avaliarPorc(11);
     echo '<pre>';
        print_r($visualizacao[0]); 
    echo '</pre>';

    // $visualizacao[0]->avaliar();
    // $visualizacao[] = new Visualizacao($g[1],$v[0]);
    // $visualizacao[] = new Visualizacao($g[0],$v[1]);
    // $visualizacao[] = new Visualizacao($g[0],$v[2]);

    // echo '<pre>';
    //     print_r($visualizacao[0]); 
    // echo '</pre>';


    // echo '<pre>';
    //     print_r($v[0]);
    // echo '</pre>';

    // echo '<pre>';
    //     print_r($g[0]); 
    // echo '</pre>';

    





?>