<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
          require ('./inc/Config.inc.php');
          
          $maria = new AcessoProtegido('Maria', 'maria@server.com');
          $maria->Nome = 'Maria Santos';
          $maria->setEmail('mariaSantos@server.com');
          var_dump($maria);
          echo "<hr>";
          
          $pablo = new AcessoProtegidoFilha('Pablo', 'pablo@gmail.com');
          $pablo->addCPF('Pablo Silva', '090903940-99');
          var_dump($pablo);
        ?>
    </body>
</html>
