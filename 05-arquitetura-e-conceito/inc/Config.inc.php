<?php

function __autoload($Class) {
    $dirName = 'Class';
    if (file_exists("{$dirName}/{$Class}.class.php")):
        require ("{$dirName}/{$Class}.class.php");
    else :
        die("Erro ao incluir {$dirName}/{$Class}.class.php <hr>" );
    endif;
}
