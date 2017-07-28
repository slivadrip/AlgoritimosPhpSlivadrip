<?php

/**
 * PolimorfismoDeposito.class.php [ TIPO ]
 * Descricao
 * @copyright (c) year, Adriano S. Pereira
 */
class PolimorfismoDeposito extends Polimorfismo {

    public $Desconto;
    
    public function __construct($Produto, $Valor) {
        parent::__construct($Produto, $Valor);
        $this->Desconto = 15;
        $this->Metodo = 'Deposito';
    }

    function setDesconto($Desconto) {
        $this->Desconto = $Desconto;
    }

    public function Pagar() {
        $this->Valor = ($this->Valor/100) * 100 - $this->Desconto;
        parent::Pagar();
    }
    
}
