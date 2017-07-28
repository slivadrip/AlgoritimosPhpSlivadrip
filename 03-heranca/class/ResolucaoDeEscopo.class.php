<?php

/**
 * ResolucaoDeEscopo.class.php [ TIPO ]
 * Descricao
 * @copyright (c) year, Adriano S. Pereira
 */
class ResolucaoDeEscopo{
    
    public $Produto;
    public $Valor;
    public static $Vendas;
    public static $Lucros;
    
    function __construct($Produto, $Valor) {
        $this->Produto = $Produto;
        $this->Valor = $Valor;
    }

    public function Vender() {
        self::$Vendas +=1;
        self::$Lucros = $this->Valor * self::$Vendas;
        echo "{$this->Produto} vendido por R$ {$this->Valor} <br>";
    }
    public static function Relatorio() {
        echo "<hr>";
        echo "Este produto vendeu " .self::$Vendas . " unidades. Total R$ ".self::$Lucros;
        echo "<hr>";
    }

}
