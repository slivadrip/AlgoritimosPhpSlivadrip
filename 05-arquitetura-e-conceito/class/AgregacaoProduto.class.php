<?php

/**
 * AgregacaoProduto.class [ TIPO ]
 * Descricao
 * @copyright (c) year, Adriano S. Pereira
 */
class AgregacaoProduto {

    private $Produto;
    private $Nome;
    private $Valor;
    
    public function __construct($Produto, $Nome, $Valor) {
        $this->Produto = $Produto;
        $this->Nome = $Nome;
        $this->Valor = $Valor;
    }
    
    public function getProduto() {
        return $this->Produto;
    }

    public function getNome() {
        return $this->Nome;
    }

    public function getValor() {
        return $this->Valor;
    }



}
