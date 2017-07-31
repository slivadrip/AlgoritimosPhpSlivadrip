<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        require ('./inc/Config.inc.php');
        
        $adriano = new AcessoPublico('Adriano', 'slivadrip@gmail.com');
        $adriano->Nome = 'Marcos';
        $adriano->Email = 'aa';
        
        var_dump($adriano);
        ?>
    </body>
</html>
