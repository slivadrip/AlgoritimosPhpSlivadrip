<?php

/**
 * AcessoPrivado.class.php [ TIPO ]
 * Descricao
 * @copyright (c) year, Adriano S. Pereira
 */
class AcessoPrivado {

    private $Nome;
    private $Email;
    private $CPF;

    function __construct($Nome, $Email, $CPF) {
        $this->setNome($Nome);
        $this->setEmail($Email);
        $this->setCPF($CPF);
    }

    public function setNome($Nome) {
        if (is_string($Nome)):
            $this->Nome = $Nome;
        else:
            die('Erro no nome!!');
        endif;
    }

    public function setEmail($Email) {
        if (filter_var($Email, FILTER_VALIDATE_EMAIL)):
            $this->Email = $Email;
        else:
            die('Email invalido');
        endif;
    }

    public function setCPF($CPF) {
        if (preg_match('/[0-9]*/i', $CPF) && strlen($CPF) == 11):
            $this->CPF = $CPF;
        else:
            die('Erro no CPF');
        endif;
    }

}
