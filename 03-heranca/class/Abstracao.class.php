<?php

/**
 * Abstracao.class.php [ TIPO ]
 * Descricao
 * @copyright (c) year, Adriano S. Pereira
 */
abstract class Abstracao {

    public $Cliente;
    public $Conta;
    public $Saldo;

    
    function __construct($Cliente, $Saldo) {
        $this->Cliente = $Cliente;
        $this->Saldo = $Saldo;
    }
    
    public function Depositar($Valor){
        $this->Saldo += (float) $Valor;
        echo "<span style='color:green'> <b> {$this->Conta}: </b> Deposito de {$this->Real($Valor)} efetuado com sucesso </span> <br>";
        
    }
    
    public function Sacar($Valor){
        $this->Saldo -= (float) $Valor;
       echo "<span style='color:red'> <b> {$this->Conta}: </b> Saque de {$this->Real($Valor)} efetuado com sucesso </span> <br>";
 
    }
    
    public function Transferir($Valor, $Destino){
        if($this === $Destino):
            echo "Voce não pode transferi valores para a mesma conta <br>";
            else:
            $this->Sacar($Valor);
            $Destino->Depositar($Valor);
           echo "<span style='color:blue'> <b> {$this->Conta}: </b> Transferencia de {$this->Real($Valor)} efetuado com sucesso de {$this->Cliente} para {$Destino->Cliente} </span> <br>";
         
            
        endif;
    }
    
    
    
    public function Extrato(){
        echo "<hr> <hr> Olá {$this->Cliente}. Seu Saldo em {$this->Conta} e de  {$this->Real($this->Saldo)} <hr>";
    }

    public function Real($Valor){
        return "R$ " . number_format($Valor, '2','.',',');
    }
    
    abstract public function VerSaldo();
    
}
