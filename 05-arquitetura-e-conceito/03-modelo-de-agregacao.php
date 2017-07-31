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
        $prophp = new AgregacaoProduto('20', 'Pro php', 2000);
        $wsphp = new AgregacaoProduto('21', 'wa-php', 1000);
        $wshtml = new AgregacaoProduto('21', 'ws-html', 1000);

        $outrocurso = new stdClass();
        $outrocurso->Produto = '23';
        $outrocurso->Nome = 'curso de jQuery';
        $outrocurso->Valor = 400;

        $carrinho = new AgregacaoCarrinho($adriano);
        $carrinho->Add($prophp);
        $carrinho->Add($wsphp);
        $carrinho->Add($wshtml);
        $carrinho->Remove($wsphp);
        
        
        
        var_dump($carrinho);
        echo "<hr>";
        var_dump($adriano, $prophp, $outrocurso)
        ?>
    </body>
</html>
