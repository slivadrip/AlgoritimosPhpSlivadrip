<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Conceito de Herança</title>
    </head>
    <body>
        <?php
        require ('./inc/Config.inc.php');
        $pessoa = new Heranca('Adriano', 21);
        $pessoa->Formar("PRO PHP");
        $pessoa->Formar("ES PHP");
        $pessoa->Envelhecer();
        $pessoa->VerPessoa();
        var_dump($pessoa);

        echo "<hr>";

        $pessoaME = new HerancaJuridica('Adriano', 12, 'slivadrip');
        $pessoaME->Formar("PRO PHP");
        $pessoaME->Formar("ES PHP");
        $pessoaME->Envelhecer();
        $pessoaME->VerPessoa();
        $pessoaME->Contratar("Marcos");
        $pessoaME->VerEmpresa();
        
        var_dump($pessoaME);
        ?>
    </body>
</html>
