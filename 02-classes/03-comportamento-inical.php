<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ('./class/ComportamentoInicial.class.php');
        
        $adriano = new ComportamentoInicial('Adriano', 21, 'programador', 4800);
        $pedro = new ComportamentoInicial('Pedro', 25, 'programador', 4800);
        $marcos = new ComportamentoInicial('Marcos', 23, 'programador', 4800);

        
        $adriano->ver();
        ?>
    </body>
</html>
