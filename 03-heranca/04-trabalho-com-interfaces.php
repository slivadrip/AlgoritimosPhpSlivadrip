<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require './interface/IAluno.php';
        require ('./inc/Config.inc.php');
        
        $aluno = new TrabalhoComInterfaces('Adriano', 'Pro php ');
        $aluno->Formar();     
        $aluno->Matricular('ES-PHP');
        var_dump($aluno);
        ?>
    </body>
</html>
