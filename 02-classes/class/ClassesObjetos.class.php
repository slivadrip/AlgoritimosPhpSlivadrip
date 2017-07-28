<?php

/**
 * ClassesObjetos.class [ TIPO ]
 * Descricao
 * @copyright (c) year, Adriano S. Pereira
 */
class ClassesObjetos{

    var $Classe;
    var $Funcao;
    
    function getClass($Class, $Funcao){
        echo "<p> A classe {$Class} server para {$Funcao}";
    }
    
    function verClass(){
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
}
