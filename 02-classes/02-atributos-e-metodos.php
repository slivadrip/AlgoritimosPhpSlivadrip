<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ('./class/AtributosMetodos.class.php');
        
        $pessoa = new AtributosMetodos();
        $pessoa->setUsuario('Adriano', 22, 'programador');
        $usuario = $pessoa->getUsuario();
        echo $usuario;
        
        echo "<hr>";
        
        $pessoa->getClasse();
        ?>
    </body>
</html>
