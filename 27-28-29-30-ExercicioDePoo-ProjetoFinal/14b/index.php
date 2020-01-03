<?php

    require_once 'Video.php';
    require_once 'Gafanhoto.php'; 


    $v =  array();
    $g =  array();

    $v[] = new Video('Aula 1 POO');
    $v[] = new Video('Aula 12 de PHP');
    $v[] = new Video('Aula 15 de HTML 5');



    echo '<pre>';
        print_r($v);
    echo '</pre>';


    $g[] =  new Gafanhoto('Joana', 18, 'F', 'Joaninha');
    echo '<pre>';
        print_r($g); 
    echo '</pre>';







?>