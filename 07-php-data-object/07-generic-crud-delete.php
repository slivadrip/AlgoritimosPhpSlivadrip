<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ( './_app/Config.inc.php');

        $deleta = new Delete;
        $deleta->ExeDelete('ws_siteviews_agent', "WHERE agent_id >= :id", 'id=1');

        if ($deleta->getResult()):
            echo "{$deleta->getRowCount()} registro(s) removidos com sucesso!<hr>";
        endif;

//        var_dump($deleta);
        ?>
    </body>
</html>
