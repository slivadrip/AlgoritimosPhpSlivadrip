<?php

/**
 * Polimorfismo.class [ TIPO ]
 * Descricao
 * @copyright (c) year, Adriano S. Pereira
 */
class Polimorfismo {

    public $Produto ;
    public $Valor ;
    public $Metodo ;
    
    function __construct($Produto, $Valor) {
        $this->Produto = $Produto;
        $this->Valor = $Valor;
        $this->Metodo = 'Boleto';
    }
    
    public function Pagar(){
        echo "Você pagou {$this->Real($this->Valor)} pro um {$this->Produto} <br>";
        echo "<small>Pagamento efetuado via {$this->Metodo} </small> <hr>";
    }

    public function Real($Valor){
        return "R$ " . number_format($Valor,'2','.',',');
    }
}
