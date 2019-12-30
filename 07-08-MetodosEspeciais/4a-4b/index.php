<?php
    include_once './Caneta.php';

    echo '<pre>';

    // Criando os objetos com contrutor
    $c1 = new Caneta("Bic Bonita", 0.5, "Rosa");
    $c2 = new Caneta("Caneta Baratinha", 0.7, "Preta");


    // $c1->setModelo('Bic Cristal');
    // $c1->setPonta(0.8);


    
    print_r($c1);
    print_r($c2);
    // print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";


    echo '</pre>';
   
    // $c1->rabiscar();


?>