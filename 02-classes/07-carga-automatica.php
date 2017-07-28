<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ('./inc/Config.inc.php');
        
        $classeA = new ClassesObjetos();
        $classeB = new AtributosMetodos();
        $classeC = new ComportamentoInicial('Adriano', 22, 'vendedor', 2200);
        
        var_dump($classeA, $classeB, $classeC);
        ?>
    </body>
</html>
