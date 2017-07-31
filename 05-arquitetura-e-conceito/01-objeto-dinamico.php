<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ('./inc/Config.inc.php');
        
        $cliente = new ObjetoDinamico;

        $adriano = new stdClass();
        $adriano->Nome = 'Adriano';
        $adriano->Email = 'slivadrip@gmail.com';
        
        $cliente->Novo($adriano);
        
        $marcos  =clone ($adriano);
        
        $marcos->Nome = 'Adriano';
          $marcos->Email = 'banana';
        
        
        var_dump($cliente, $adriano, $marcos);
        ?>
    </body>
</html>
