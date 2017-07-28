<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ('./inc/Config.inc.php');
        
        $boleto = new Polimorfismo('Pro PHP', '120.90');
        $boleto->Pagar();
        var_dump($boleto);
        echo "<hr>";
        
        $deposito = new PolimorfismoDeposito('Pro PHP', '120.90');
        $deposito->Pagar();
        
        $cartao = new PolimorfismoCartao('Pro PHP', '120.90');
        $cartao->Pagar();
        $cartao->Pagar(10);
        var_dump($cartao);
        ?>
    </body>
</html>
