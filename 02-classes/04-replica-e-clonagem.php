<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ('./class/ReplicaClonagem.class.php');
        $readA = new ReplicaClonagem("posts", "categoria = 'noticias'", 'ORDER BY dara DESC');
       
        
        $readA->setTermos("categoria = 'net'");
        
        $readB = clone($readA);
        $readB->setTermos("categoria = 'redes sociais'");
        
        $readC = clone($readA);
        $readC->setTabela('comentarios');
        $readC->setTermos("post = 25");
        
        
        $readC->ler();
        $readA->Ler();
        $readB->Ler();

                
        var_dump($readA, $readB, $readC);

        ?>
    </body>
</html>
