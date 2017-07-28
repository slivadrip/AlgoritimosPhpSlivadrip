<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ('./inc/Config.inc.php');

        $produto = new ResolucaoDeEscopo('Livro de PHP', 59.90);
        $digital = new ResolucaoDeEscopoDigital('Livro de java', 100);
        $produto->Vender();
        $produto->Vender();
        $produto->Vender();

        $digital->Vender();
        $digital->Vender();
        // $produto->Relatorio();
        ResolucaoDeEscopo::Relatorio();
        echo ResolucaoDeEscopoDigital::$Digital . "Livros Digitais <br>";
        echo ResolucaoDeEscopo::$Vendas -ResolucaoDeEscopoDigital::$Digital ."Livros impressos";

        var_dump($produto);
        ?>
    </body>
</html>
