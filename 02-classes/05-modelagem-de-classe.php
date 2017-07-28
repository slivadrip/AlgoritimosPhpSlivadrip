<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ('./class/ModelagemDeClasse.class.php');
        
        $adriano = new ModelagemDeClasse('Adriano', 21, 'programador', 4800);
        $adriano->setProfissao('Web Master');
        
        $adriano->Trabalhar("Portal", 12000);
        
        
        var_dump($adriano);
        ?>
    </body>
</html>
