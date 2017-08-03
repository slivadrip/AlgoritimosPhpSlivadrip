<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ('./_app/Config.inc.php');

        //$check = new Check();
        //var_dump($check);

        $Email = 'adriano@gmail.com';

        if (Check::Email($Email)):
            echo "Valido! <hr>";
        else:
            echo "Invalido <hr>";
        endif;

        $Name = 'Estamos aprendendo PHP. veja vocÇe como é!!';
        echo Check::Name($Name) . "<hr>";


        $Data = '05/02/2017 12:57:30';

        echo Check::Data($Data) . "<hr>";

        $String = 'Olá mundo, estamos estudando PHP na UpInside!';
        echo Check::Words($String, 5, '<small>continue lendo...</small><hr>');

        echo Check::CatByName('artigos') . '<hr>';
        echo Check::CatByName('esportes') . '<hr>';
        //echo Check::CatByName('internet') . '<hr>';

        echo Check::UserOnline() . '<hr>';

//        echo Check::Image('google.jpg', 'Google!');
        echo Check::Image('google.jpg', 'Google!', '300', 180);
        ?>
    </body>
</html>
