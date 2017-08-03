<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ( './_app/Config.inc.php');
        
        $PDO = new Conn;
        $name = 'Firefox';
        $views =  '128';
        
        try {
            $QRCreate = "INSERT INTO ws_siteviews_agent (agent_name, agent_views) VALUES (?, ?)";
            $Create = $PDO->getConn()->prepare($QRCreate);
            
            //$Create->bindValue(1,'Safari' , PDO::PARAM_STR );
            //$Create->bindValue(2,'99' , PDO::PARAM_INT );
            
            $Create->bindParam(1, $name, PDO::PARAM_STR, 15);
            $Create->bindParam(2, $views, PDO::PARAM_INT, 15);

            //$Create->execute();
            
            if($Create->rowCount()):
                echo "{$PDO->getConn()->lastInsertId()} - Cadastro com sucesso <hr>";
            endif;
            
            
            $QrSelect = "SELECT * FROM ws_siteviews_agent WHERE agent_views >= :visitas";
            $Select = $PDO->getConn()->prepare($QrSelect);
            
            $Select->bindValue(':visitas', '7');
            
            $Select->execute();
            
            if($Select->rowCount() >= 1):
                echo "Pesquisa retornou {$Select->rowCount()} resultado(s) <hr>";
                $resultado = $Select->fetchAll(PDO::FETCH_ASSOC);
                var_dump($resultado);
            else:
                echo "Nada ainda! <hr>";
            endif;
            
        } catch (PDOException $e) {
            PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
        }
                
        
        ?>
    </body>
</html>
