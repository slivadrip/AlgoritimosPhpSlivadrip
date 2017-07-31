<?php

/**
 * ObjetoDinamico.class.php [ TIPO ]
 * Descricao
 * @copyright (c) year, Adriano S. Pereira
 */
class ObjetoDinamico {

    public $Nome;
    private $Email;

    public function Novo($Cliente) {
        if (is_object($Cliente)):
            $this->Nome = $Cliente->Nome;
            $this->Email = $Cliente->Email;
        else:
            die('erro informe um objeto com nome e email');
        endif;
    }

}
