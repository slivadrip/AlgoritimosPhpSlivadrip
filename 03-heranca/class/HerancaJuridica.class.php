<?php

/**
 * HerancaJuridica.class.php [ TIPO ]
 * Descricao
 * @copyright (c) year, Adriano S. Pereira
 */
class HerancaJuridica extends Heranca{

    public $Empresa;
    public $Funcionario;
    
    public function __construct($Nome, $Idade, $Empresa) {
        parent::__construct($Nome, $Idade);
        $this->Empresa = $Empresa;
    }
    
    public function Contratar($Pessoa){
        echo "A empresa {$this->Empresa} de {$this->Nome} contratou {$Pessoa} <hr>";
        $this->Funcionario += 1;
    }
    
    public function VerEmpresa() {
        echo "{$this->Empresa} foi fundada por {$this->Nome} <br> <small style='color:#09f;'>";
        parent::VerPessoa();
        echo "</small>";
    }
}
