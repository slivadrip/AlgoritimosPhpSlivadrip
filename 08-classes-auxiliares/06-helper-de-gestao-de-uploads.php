<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Helper de Gestão de Uploads</title>
        <link rel="stylesheet" href="css/reset.css" />
    </head>
    <body>
        <?php
        require('./_app/Config.inc.php');

        $form = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if ($form && $form['sendImage']):

            $upload = new Upload('uploads/');
            $imagem = $_FILES['imagem'];
            //var_dump($imagem);

            $upload->Image($imagem);
            if (!$upload->getResult()):
                WSErro("Erro ao enviar Imagem:<br><small>{$upload->getError()}</small>", WS_ERROR);
            else:
                WSErro("Imagem enviada com sucesso:<br><small>{$upload->getResult()}</small>", WS_ACCEPT);
            endif;

            echo "<hr>";
            var_dump($upload);

        endif;
        ?>

        <form name="fileForm" action="" method="post" enctype="multipart/form-data">
            <label>
                <input type="file" name="imagem"/>
            </label>

            <input type="submit" name="sendImage" value="enviar arquivo!"/>
        </form>
    </body>
</html>
