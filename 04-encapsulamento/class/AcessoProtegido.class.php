<?php

/**
 * AcessoProtegido.class.php [ TIPO ]
 * Descricao
 * @copyright (c) year, Adriano S. Pereira
 */
class AcessoProtegido {

    public $Nome;
    protected $Email;

    function __construct($Nome, $Email) {
        $this->Nome = $Nome;
        $this->setEmail($Email);
    }

    function setEmail($Email) {
        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)):
            die('Email invalido');
        else:
            $this->Email = $Email;
        endif;
    }

    final protected function setNome($Nome) {
        $this->Nome = $Nome;
    }

}

class AcessoProtegidoFilha extends AcessoProtegido {

    protected $CPF;

    public function addCPF($Nome, $CPF) {
        parent::setNome($Nome);
        $this->CPF = $CPF;
    }

}
