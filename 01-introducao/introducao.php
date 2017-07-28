<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      <?php
            if(phpversion() >= 5.4):
                echo phpversion() . 'ola mundo podemos programar';
            else:
                echo phpversion().'nao podemos programar';
            endif;
            echo phpinfo();
        ?>
    </body>
</html>
