<?php

/**
 * PolimorfismoCartao.class.php [ TIPO ]
 * Descricao
 * @copyright (c) year, Adriano S. Pereira
 */
class PolimorfismoCartao extends Polimorfismo {
    
    public $Juros;
    public $Encargos;
    public $Parcela;
    public $NumParcelas;
    
    public function __construct($Produto, $Valor) {
        parent::__construct($Produto, $Valor);
        $this->Juros = 1.17;
        $this->Metodo= 'Cartao de credito';
        
    }
    public function Pagar($Parccelas = null){
        $this->setNumParcelas($Parccelas);
        $this->setEncargos();
        
        $this->Valor = $this->Valor + $this->Encargos;
        $this->Parcela = $this->Valor / $this->NumParcelas;
        
        echo "Você  pagou {$this->Real($this->Valor)} por um {$this->Produto} <br>";
        echo "<small> Pagamento efetuado via {$this->Metodo} em {$this->NumParcelas}x iguais de  {$this->Real($this->Parcela)} </small> <hr>";
        
    }
    
    function setJuros($Juros) {
        $this->Juros = $Juros;
    }

    function setEncargos() {
        $this->Encargos = ($this->Valor *($this->Juros /100))* $this->NumParcelas;
    }

    function setNumParcelas($NumParcelas) {
        $this->NumParcelas = ((int) $NumParcelas >= 1 ? $NumParcelas :1);
    }



}
