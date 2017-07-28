<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ('./inc/Config.inc.php');
//        
//        
//        $conta = new Abstracao('Adriano', 500);
//        $contaDois = new Abstracao('Dete', 500);
//
//        $conta->Depositar(1000);
//        $conta->Sacar(500);
//        
//        $conta->Transferir(100, $contaDois);
//        
//        var_dump($conta,$contaDois)
//       
        $cc = new AbstracaoCC('Adriano', 0, 1000);
        $cp = new AbstracaoCP('Adriano', 0);
        
        

        $cc->Depositar(1000);
        $cc->Sacar(500);
        $cc->Transferir(500, $cp);
        
        $cp->Depositar(1000);
        $cp->Sacar(500);
        $cp->Transferir(500, $cc);
        
        $cc->VerSaldo();
        $cp->VerSaldo();
        
        var_dump($cc, $cp);
        ?>
    </body>
</html>
