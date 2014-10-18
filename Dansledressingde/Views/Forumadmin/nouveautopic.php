
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="/Dansledressingde/Webroot/css/forum.css" /> 
        <title><?php echo _("Forum"); ?> </title>
        </head>
        <?php

$forum = (int) $_GET['f'];



echo '<form method="post"  action="new_Topic?f='.$forum.'">' ;
?>
<label for="titre"><?php echo _("Titre du Topic"); ?></label>
<input type="text" name="titre" id="titre" size="36px" required/>
</br>

<label for="contenu"><?php echo _("Description"); ?></label>
<textarea  name="contenu" id="contenu" required></textarea>

<input type="submit"  value="Creer" />
        </form>