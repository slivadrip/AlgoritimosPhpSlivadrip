<?php

/**
 * AcessoPublico.class.php [ TIPO ]
 * Descricao
 * @copyright (c) year, Adriano S. Pereira
 */
class AcessoPublico {
    
    public $Nome;
    public $Email;
    
    function __construct($Nome, $Email) {
        $this->Nome = $Nome;
        $this->setEmail($Email);
    }

    function setEmail($Email) {
        if(!filter_var($Email,FILTER_VALIDATE_EMAIL)):
            die('Email invalido');
        else:
            $this->Email = $Email;
        endif;
        
    }


}
