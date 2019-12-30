<?php
    include_once './ControleRemoto.php';

    echo '<h1>Projeto Controle Remoto</h1>';

    echo '<pre>';

    $c1 =  new ControleRemoto();
    $c1->ligar();
    $c1->abrirMenu();
    $c1->fecharMenu();
    $c1->maisVolume();
    $c1->abrirMenu();
       
    echo '</pre>';
   



?>