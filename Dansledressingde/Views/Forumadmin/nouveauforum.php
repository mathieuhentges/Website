
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="/Dansledressingde/Webroot/css/forum.css" /> 
        <title><?php echo _("Forum") ?> </title>
        </head>
        





<form method="post"  action="new_Forum">

<label for="titre"><?php echo _("Nom du Forum") ?> </label>
<input type="text" name="titre" id="titre" size="36px" required/>
</br>

<label for="contenu"><?php echo _("Description") ?></label>
<textarea  name="contenu" id="contenu" required></textarea>

<input type="submit"  value="Creer" />
        </form>