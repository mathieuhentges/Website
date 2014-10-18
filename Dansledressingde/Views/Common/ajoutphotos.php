
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo _("Ajout d'un article"); ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel='stylesheet' type='text/css' href="/Dansledressingde/Webroot/css/ajout_photo.css"/>
    </head>
    <body>
            <form method="post" action= "<?php echo BASE_URL . '/GererStock/newPhoto/'. $article->id_article ?>" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><input type="file" id="monInputFile" name="img" required/></td>
                    </tr>

                    <tr>
                        <td><input type="submit" class ="envoyer" name="<?php echo _("Envoyer"); ?>"/></td>
                    </tr>

                </table>
                <p class="erreur">
                    <?php
                    if (isset($erreur)) {
                        echo $erreur;
                    }
                    ?>
                </p>

            </form>
        </div>
    </body>
</html>
