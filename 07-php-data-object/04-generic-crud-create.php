<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ('./_app/Config.inc.php');
        $Dados = ['agent_name' => 'Firefox', 'agent_views' => '1280'];

        $Cadastra = new Create;
        // $Cadastra->ExeCreate('ws_siteviews_agent', $Dados);

        $Dados = ['agent_name' => 'IE', 'agent_views' => '80'];
        $Cadastra->ExeCreate('ws_siteviews_agent', $Dados);
        
         
        if($Cadastra->getResult()):
            echo "Cadastro com sucesso!<hr>";
        endif;
        
        var_dump($Cadastra);
        ?>
    </body>
</html>
