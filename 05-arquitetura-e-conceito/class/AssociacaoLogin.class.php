<?php

/**
 * AssociacaoLogin.class [ TIPO ]
 * Descricao
 * @copyright (c) year, Adriano S. Pereira
 */
class AssociacaoLogin {
    /*
     * @var  AssociacaoCliente
     */

    public $Cliente;
    private $Login;

    function __construct($Cliente) {
        if (is_object($Cliente)):
            $this->Cliente = $Cliente;
            $this->Login = true;
        else:
            die('erro ao logar');
        endif;
    }

    public function getLogin() {
        return $this->Login;
    }

    public function getCliente() {
        return $this->Cliente;
    }

}
