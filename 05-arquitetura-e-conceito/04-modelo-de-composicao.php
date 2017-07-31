<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ('./inc/Config.inc.php');
        
        $adriano =  new ComposicaoUsuario('Adriano','slivadrip@gmail.com');
        $adriano->CadastrarEndereco('Simolandia', 'GO');
        
        echo "O email de {$adriano->Nome} é {$adriano->Email} <br>";
        echo "{$adriano->Nome} mora em {$adriano->getEndereco()->getCidade()}/{$adriano->getEndereco()->getEstado()}";
        var_dump($adriano);
        ?>
    </body>
</html>
