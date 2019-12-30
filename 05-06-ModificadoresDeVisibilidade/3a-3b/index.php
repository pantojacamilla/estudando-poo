<?php
    include_once './Caneta.php';

    echo '<pre>';
    // Estancia do objeto c1
    $c1 = new Caneta;

    // Acesso direto aos atributos
    $c1->modelo = 'Bic Cristal';
    $c1->cor = 'Azul';
    // $c1->ponta = 0.5;
    // $c1->carga = 80;
  
    // Chamada de método
    // $c1->tampar();

    print_r($c1);
    echo '</pre>';
   
    $c1->rabiscar();


?>