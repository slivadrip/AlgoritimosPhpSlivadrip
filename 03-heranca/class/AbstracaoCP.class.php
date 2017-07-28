<?php

/**
 * AbstracaoCP.class.php [ TIPO ]
 * Descricao
 * @copyright (c) year, Adriano S. Pereira
 */
class AbstracaoCP extends AbstracaoCC{

    public $Redimento;
    
    function __construct($Cliente, $Saldo) {
        parent::__construct($Cliente, $Saldo, 0);
        $this->Conta = 'Conta Poupança';
        $this->Redimento = 1.7;
        
    }
    
    final public function Depositar($Valor){
        $Juro =  $Valor * ($this->Redimento /100);
        $Deposito = $Valor + $Juro;
        parent::Depositar($Deposito);
        echo "<small style='color:#09f'>Valor do deposito {$this->Real($Valor)}  || Redimento {$this->Real($Juro)}</small> <hr>";
      
    }
}
