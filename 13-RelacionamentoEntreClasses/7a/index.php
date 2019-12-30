<?php
    include_once './Lutador.php';
    $l = array();
    $l[] = new Lutador('Pretty Boy', 'França', 30, 1.75, 68.9, 11, 2, 1);
    $l[] = new Lutador('Putscript', 'Basil', 29, 1.68, 57.8, 14, 2, 3);

    echo '<pre>';
      
        $l[0]->perderLuta();
        $l[0]->perderLuta();
        $l[0]->perderLuta();
        $l[0]->status();
        print_r($l[0]);
        // print_r($l[1]);
    echo '</pre>';
?>