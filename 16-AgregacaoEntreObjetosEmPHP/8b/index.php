<?php
    require_once './Lutador.php';
    require_once './Luta.php';

    $l = array();
    $l[] = new Lutador('Pretty Boy', 'França', 30, 1.75, 68.9, 11, 2, 1);
    $l[] = new Lutador('Putscript', 'Basil', 29, 1.68, 57.8, 14, 2, 3);

    echo '<pre>';

    $UEC01 = new Luta();

    $UEC01->marcarLuta($l[0], $l[1]);
    $UEC01->lutar();

    $l[0]->status();
    $l[1]->status();


    echo '</pre>';
?>