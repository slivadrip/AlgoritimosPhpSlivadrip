<?php

/**
 * ResolucaoDeEscopoDigital.class.php [ TIPO ]
 * Descricao
 * @copyright (c) year, Adriano S. Pereira
 */
class ResolucaoDeEscopoDigital  extends ResolucaoDeEscopo{
    
    public static $Digital;

    public function __construct($Produto, $Valor) {
        parent::__construct($Produto, $Valor);
    }
    
    public function Vender() {
        self::$Digital +=1;
        parent::Vender();
    }
}
