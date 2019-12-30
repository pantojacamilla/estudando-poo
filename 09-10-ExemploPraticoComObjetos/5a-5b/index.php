<?php
    include_once './Conta.php';

    echo '<pre>';


        $cp = new ContaBanco(12345, 'cp', 'Jubileu');
        $cp->depositar(300);
        $cp->sacar(100);
        $cp->pagarMensalidade();
        print_r($cp);

        echo '<br/>';

        $cc = new ContaBanco(54321, 'cc', 'Creuza');
        $cc->depositar(500);
        $cc->sacar(50);
        $cc->pagarMensalidade();
        print_r($cc);

    echo '</pre>';
   
    // $c1->rabiscar();


?>