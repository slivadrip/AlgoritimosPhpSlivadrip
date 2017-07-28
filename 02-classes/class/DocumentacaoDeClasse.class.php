<?php

/**
 * <b>DocumentacaoDeClasse</b>
 * Essa classe foi criada para mostrar a interaçao de objetos
 * 
 * 
 * 
 * @copyright (c) 2017, Slivadrip
 */
class DocumentacaoDeClasse {

    /** @var string Nome da Empresa */
    public $Empresa;

    /** @var int setores da Empresa */
    public $Setores;

    /** @var InteracaoClasse objeto vindo da classe interacao */
    public $Funcionario;

    public function __construct($Empresa) {
        $this->Empresa = $Empresa;
        $this->Setores = 0;
    }

    /**

     * <b>Contratar Funcionario </b> Informe os dados
     * @param objetc $Funcionario = objeto da classe InteracaoClasse 
     * @param string $Cargo = Profissao ou Cargo
     * @param float $Salario = Salario do funcionario /
     */
    public function contratar($Funcionario, $Cargo, $Salario) {
        $this->Funcionario = (object) $Funcionario;
        $this->Funcionario->Trabalhar($this->Empresa, $Salario, $Cargo);
        $this->Setores += 1;
    }

    public function Pagar() {
        $this->Funcionario->Recer($this->Funcionario->Salario);
    }

    public function Promover($Cargo, $Salario = null) {
        $this->Funcionario->Profissao = $Cargo;
        if ($Salario):
            $this->Funcionario->Salario = $Salario;
        endif;
    }

    public function Funcionarios($Funcionario) {
        $this->Funcionario = (object) $Funcionario;
    }

    public function Demitir($Recisao) {
        $this->Funcionario->Recer($Recisao);
        $this->Funcionario->Empresa = null;
        $this->Funcionario->Salario = null;
        $this->Setores -=1;
    }

}
