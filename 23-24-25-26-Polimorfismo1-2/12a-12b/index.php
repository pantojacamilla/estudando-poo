<?php

    // require_o nce './Animal.php'; NÃO PRECISA
    
    require_once './Mamifero.php';
    require_once './Reptil.php';
    require_once './Peixe.php';
    require_once './Ave.php';
    require_once './Cachorro.php';
    require_once './Canguru.php';  
    require_once './Tartaruga.php';
    
    $m = new Mamifero();
    $r = new Reptil();
    $p = new Peixe();
    $a = new Ave();
    $cang =  new Canguru();
    $cacho = new Cachorro();
    $tarta = new Tartaruga();

    echo '<br><br>Mamífero:';
    $m->setPeso(85.3);
    $m->setIdade(2);
    $m->setMembros(4); 
    $m->locomover();
    $m->alimentar();
    $m->emitirSom();

//----------------------
    echo '<br><br>Peixe:';
    $p->setPeso(0.35);
    $p->setIdade(1);
    $p->setMembros(0);
    $p->locomover();
    $p->alimentar();
    $p->emitirSom();
    $p->soltarBolha();

//--------------------
    echo '<br><br>Ave:';
    $a->setPeso(0.89);
    $a->setIdade(2);
    $a->setMembros(2);
    $a->locomover();
    $a->alimentar();
    $a->emitirSom();
    $a->fazerNinho();

//-------------------

    echo '<br><br>Canguru:';
    $cang->setPeso(55.30);
    $cang->setIdade(3);
    $cang->setMembros(4);
    $cang->locomover();
    $cang->alimentar();
    $cang->emitirSom();
    $cang->usarBolsa();

//----------------------
    echo '<br><br>Cachorro:';
    $cacho->setPeso(3.54);
    $cacho->setIdade(5);
    $cacho->setMembros(4);
    $cacho->locomover();
    $cacho->alimentar();
    $cacho->emitirSom();
    $cacho->abanandoRabo();

//----------------------
    echo '<br><br>Tartaruga:';
    $tarta->locomover();
    $tarta->alimentar();
    $tarta->emitirSom();



?>