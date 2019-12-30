<?php
    require_once 'Pessoa.php';
    require_once 'Aluno.php';
    require_once 'Professor.php';
    require_once 'Funcionanrio.php';
    

    $pessoa = array();

    $pessoa[] = new Pessoa();
    $pessoa[] = new Aluno();
    $pessoa[] = new Professor();
    $pessoa[] = new Funcionario();


    $pessoa[0]->setNome('Pedro');
    $pessoa[1]->setNome('Maria');
    $pessoa[2]->setNome('Cláudio');
    $pessoa[3]->setNome('Fabiana');


    $pessoa[1]->setCurso('Informática');
    $pessoa[2]->setSalario(2500.75);
    $pessoa[3]->setSetor('Estoque');

    // $pessoa[0]->receberAumento(550.20);
    // $pessoa[0]->mudarTrabalho();
    // $pessoa[3]->cancelarMatricula();

    echo '<pre>';

        print_r($pessoa[0]);
        print_r($pessoa[1]);
        print_r($pessoa[2]);
        print_r($pessoa[3]);

    echo '</pre>';






?>