<?php

/**
 * ComportamentoInicial.class.php [ TIPO ]
 * Descricao
 * @copyright (c) year, Adriano S. Pereira
 */
class ComportamentoInicial {
    
    var $Nome, $Idade, $Profissao, $Salario;
    
    function __construct($Nome, $Idade, $Profissao, $Salario) {
        $this->Nome = (string) $Nome;
        $this->Idade = (int) $Idade;
        $this->Profissao = (string) $Profissao ; 
        $this->Salario = (float) $Salario;
        echo "O Objeto {$this->Nome} foi iniciado <hr>";
    }
            
    function __destruct() {
        echo "O Objeto {$this->Nome} foi destruido <hr>";
    }
            
    function ver(){
        
        echo "<pre>";
        print_r($this);
        echo "</pre>";
        
    }

}
