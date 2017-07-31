<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ('./inc/Config.inc.php');

        $adriano = new AssociacaoCliente('Adriano', 'slivadrip@gmail.com');
        $login = new AssociacaoLogin($adriano);

        if ($login->getLogin()):
            echo "Gerenciando o cliente id: {$login->getCliente()->getCliente()} <br>";
           echo "{$login->getCliente()->getNome()} logou com sucesso usando o email {$login->getCliente()->getEmail()} <hr>";
        else:
            echo 'erro ao logar';
        endif;

        var_dump($adriano, $login);
        ?>
    </body>
</html>
