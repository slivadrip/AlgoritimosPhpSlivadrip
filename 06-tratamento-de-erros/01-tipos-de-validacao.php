<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <h3>Tratamento por existencia</h3>
        <hr>
        <?php
        $string = 'contato';
        if (is_string($string)):
            echo "String e uma string!";
        elseif (!is_string($string)):
            echo "String nao e uma string!";
        endif;

        echo "<hr>";

        if (!empty($string)):
            echo "String existe e tem valor";
        elseif (isset($string)):
            echo "String existe mas esta em btanco";
        endif;
        ?>
        <hr><hr>
        <h3>Tratamento de decisao</h3>
        <hr>
        <?php
        $decisao = 'contato@slivadrip.com';
        if (!filter_var($decisao, FILTER_VALIDATE_EMAIL)):
            echo "E-mail informado é valido";
        elseif ($decisao == 'adriano@gmail.com'):
            die('Esse e-mail e restrito!');
        else:
            echo "E-mail válido";
        endif;

        echo ":)";
        ?>

        <hr><hr>
        <h3>Retorno de Flags</h3>
        <hr>
        <?php

        function Idade($Idade = null) {
            if (!$Idade):
                return false;
            elseif (!is_int($Idade)):
                return false;
            endif;

            return "Você naseu em: " . (date('Y') - $Idade);
        }

        $idade = 'abs';
        $idade = 21;
        if (Idade($idade)):
            echo Idade($idade);
        else:
            echo "Informe um int idade";
        endif;
        ?>


        <hr><hr>
        <h3>Comparação</h3>
        <hr>
        <?php
        $um = 10;
        $dois = 10;

        if ($um == $dois):
            echo "Um tem o mesmo valor que dois";
        elseif ($um != $dois):
            echo "Um e dois tem Valor diferente";
        endif;


        echo "<hr>";
        if ($um === $dois):
            echo "Um tem o mesmo valor que dois e o mesmo tipo";
        elseif ($um !== $dois):
            echo "Um e dois tem Valor diferente";
        endif;
        ?>
    </body>
</html>
