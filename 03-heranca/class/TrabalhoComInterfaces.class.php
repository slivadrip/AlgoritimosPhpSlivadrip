<?php

/**
 * TrabalhoComInterfaces.class.php [ TIPO ]
 * Descricao
 * @copyright (c) year, Adriano S. Pereira
 */
class TrabalhoComInterfaces implements IAluno {

    public $Aluno;
    public $Curso;
    public $Formacao;

    function __construct($Aluno, $Curso) {
        $this->Aluno = $Aluno;
        $this->Curso = $Curso;
        $this->Formacao = array();
    }

    public function Matricular($Curso) {
        $this->Curso = $Curso;
        echo "{$this->Aluno} foi matriculado no curso de {$this->Curso} <br>";
    }

    public function Formar() {
        $this->Formacao[] = $this->Curso;
         echo "{$this->Aluno} formou-se no curso de {$this->Curso} <br>";
    }

}
