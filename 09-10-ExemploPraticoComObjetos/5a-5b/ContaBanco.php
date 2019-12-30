<?php

    class ContaBanco {
        private $numConta;
        private $tipoConta; //cc | cp
        private $nomeDono;
        private $saldo;
        private $status; // true(aberto) | false(fechada)



        // Métodos
        public function abrirConta($tc){
            $this->setTipoConta($tc);   //Atribui o tipo da conta
            $this->setStatus(true);     //Muda o status para aberta
          
            if ($this->getTipoConta() == 'cc') {
               $this->setSaldo(50);
            }else if ($this->getTipoConta() == 'cp') {
                $this->setSaldo(150);
            }
        }

        public function fecharConta(){
            if ($this->getSaldo() > 0) {
                echo 'Você precisa sacar seu dinheiro para fechar sua conta.';
                
            }else if ($this->getSaldo() < 0){
                echo 'Seu saldo é devedor por isso não pode fechar sua conta.';
            }else {
                $this->setStatus(false);
                echo 'Conta fechada com sucesso !';
            }
        }

        public function depositar($deposito){
            if ($this->getStatus()) {
                $this->setSaldo($this->getSaldo() + $deposito);
            }else {
                echo 'Conta fechada, impossível realizar operação !';
            }  
        }

        public function sacar($valorSaque){
            if ($this->getStatus() && $this->getSaldo() > 0 && $valorSaque <= $this->getSaldo()) {
                $this->setSaldo($this->getSaldo() - $valorSaque);
            }else {
                echo 'Saldo insuficiente ou conta fechada !';
            }  
        }

        public function pagarMensalidade(){
            if ($this->getTipoConta() == 'cc' && $this->getStatus()) {
                $this->setSaldo($this->getSaldo() - 12);
            }else if ($this->getTipoConta() == 'cp'  && $this->getStatus()) {
                $this->setSaldo($this->getSaldo() - 20);
            } 
        }

        // Métodos Especiais

        // Contrutor

        public function __construct($nc, $tc, $nd) {
            $this->setNumConta($nc);
            $this->setNomeDono($nd);

            $this->abrirConta($tc);
        }
       
        // Getters
        public function getNumConta(){
            return $this->numConta;
        }

        public function getTipoConta(){
            return $this->tipoConta;
        }

        public function getNomeDono(){
            return $this->nomeDono;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function getStatus(){
            return $this->status;
        }

        // Setters

        public function setNumConta($numConta){
            $this->numConta = $numConta;
        }

        public function setTipoConta($tipoConta){
            $this->tipoConta = $tipoConta;
        }

        public function setNomeDono($nomeDono){
            $this->nomeDono = $nomeDono;
        }

        public function setSaldo($saldo){
            $this->saldo = $saldo;
        }

        public function setStatus($status){
            $this->status = $status;
        }

    }
?>