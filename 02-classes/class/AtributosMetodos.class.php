<?php

/**
 * AtributosMetodos.class.php [ TIPO ]
 * Descricao
 * @copyright (c) year, Adriano S. Pereira
 */
class AtributosMetodos {
    
    var $Nome;
    var $Idade;
    var $Profissao;
    
    function setUsuario($Nome, $Idade, $Profissao) {
        $this->Nome = $Nome;
        $this->Profissao = $Profissao;      
        $this->setIdade($Idade);
        
    }

    function getUsuario() {
        return "{$this->Nome} tem {$this->Idade} de idade. e trabalha como {$this->Profissao}";
    }
    
    function getClasse(){
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
    
    function setIdade($Idade){
        if(!is_int($Idade)):
            die('Idade informada e incorreta');
        else:
            $this->Idade = $Idade;
        endif;
    }
    
    function Envelhecer(){
        $this->Idade = $this->Idade + 1;
    }
}
