<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ('./inc/Config.inc.php');
        
        $adriano = new AcessoPrivado('Adriano', 'slivadrip@gmail.com', 12345678901);
        $adriano->setNome('Adriano');
        var_dump($adriano);
         
        ?>
    </body>
</html>
