<?php

/**
 * ReplicaClonagem.class.php [ TIPO ]
 * Descricao
 * @copyright (c) year, Adriano S. Pereira
 */
class ReplicaClonagem {

    var $Tabela;
    var $Termos;
    var $AddQuery;
    var $Query;
    
    function __construct($Tabela, $Termos, $AddQuery) {
        $this->Tabela = $Tabela;
        $this->Termos = $Termos;
        $this->AddQuery = $AddQuery;
    }
    function setTabela($Tabela) {
        $this->Tabela = $Tabela;
        
    }
    function setTermos($Termos) {
        $this->Termos = $Termos;
    }
    function ler() {
        $this->Query = "SELECT * FROM {$this->Tabela} WHERE {$this->Termos} {$this->AddQuery}";
        echo "{$this->Query} <hr>";
    }
    
 
}
