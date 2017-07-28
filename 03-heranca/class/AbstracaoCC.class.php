<?php

/**
 * AbstracaoCC.class.php [ TIPO ]
 * Descricao
 * @copyright (c) year, Adriano S. Pereira
 */
class AbstracaoCC extends Abstracao {

    public $Limite;

    public function __construct($Cliente, $Saldo, $Limite) {
        parent::__construct($Cliente, $Saldo);
        $this->Conta = 'Conta Corrente';
        $this->Limite = (float) $Limite;
    }

    final public function Sacar($Valor) {
        if ($this->Saldo + $this->Limite >= (float) $Valor):
            parent::Sacar($Valor);
        else:
            echo "<span style='color:red'> <b> {$this->Conta}: </b> Erro ao Sacar{$this->Real($Valor)} Saldo insuficiente!! </span> <br>";
        endif;
    }

    final public function Transferir($Valor, $Destino) {
        if ($this->Saldo + $this->Limite >= (float) $Valor):
            parent::Transferir($Valor, $Destino);
        else:
            echo "<span style='color:red'> <b> {$this->Conta}: </b> Erro ao transferir{$this->Real($Valor)} Saldo insuficiente!! </span> <br>";
        endif;
    }

    public function VerSaldo() {
        parent::Extrato();
    }

}
