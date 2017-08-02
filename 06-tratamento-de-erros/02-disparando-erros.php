<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $uso = '12345678901';
        $cpf = '500';
        // $cpf = $uso;
        $cpf = "12345678900";

        if (!$cpf):
            trigger_error("Informe seu CPF", E_USER_NOTICE);
        //user_error("Informe seu CPF", E_USER_NOTICE);
        elseif ($cpf == '500'):
            trigger_error("Formato não e mais utilizado", E_USER_DEPRECATED);
        elseif ($cpf == $uso):
            trigger_error("CPF em uso", E_USER_WARNING);
        elseif (!preg_match('/^[0-9]*$/i', $cpf) && strlen($cpf) != 11):
            trigger_error("CPF invalido", E_USER_ERROR);
        else:
            echo "CPF valido";

        endif;

        echo ":-)";
        echo "<hr>";

        function Erro($Erro, $Mensagem, $Arquivo, $Linha) {
            $erro = ($Erro === E_USER_ERROR ? 'red' : ( $Erro == E_USER_WARNING ? 'darkorange' : 'blue'));
            echo "<p style='color:{$erro}'>Erro na linha # {$Linha}: {$Mensagem} <br>";
            echo "<small>{$Arquivo} </small> </p>";
            
            if($Erro == E_USER_ERROR){
             die;   
            }
        }

        set_error_handler('Erro');

        $uso = '12345678901';
        $cpf = 'sbd';
        // $cpf = $uso;
        //$cpf = "";

        if (!$cpf):
            trigger_error("Informe seu CPF", E_USER_NOTICE);
        //user_error("Informe seu CPF", E_USER_NOTICE);
        elseif ($cpf == '500'):
            trigger_error("Formato não e mais utilizado", E_USER_DEPRECATED);
        elseif ($cpf == $uso):
            trigger_error("CPF em uso", E_USER_WARNING);
        elseif (!preg_match('/^[0-9]*$/i', $cpf) && strlen($cpf) != 11):
            trigger_error("CPF invalido", E_USER_ERROR);
        else:
            echo "CPF valido";

        endif;

        echo ":-)";
        ?>
    </body>
</html>
