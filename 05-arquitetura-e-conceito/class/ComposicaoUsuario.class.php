<?php

/**
 * newPHPClass_1 [ TIPO ]
 * Descricao
 * @copyright (c) year, Adriano S. Pereira
 */
class ComposicaoUsuario {

    public $Nome;
    public $Email;
    public $Endereco;

    public function __construct($Nome, $Email) {
        $this->Nome = $Nome;
        $this->Email = $Email;
    }

    public function CadastrarEndereco($Cidade, $Estado) {
        $this->Endereco = new ComposicaoEndereco($Cidade, $Estado);
    }

    public function getEndereco() {
        return $this->Endereco;
    }

}
