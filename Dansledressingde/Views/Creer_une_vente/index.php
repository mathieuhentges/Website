
<html>

    <head><!--En-tête-->
        <meta charset ="utf-8" />
        <link rel="stylesheet" href="Webroot/css/nouvellevente.css" />
        <title><?php echo _("Nouvelle vente") ?></title>
    </head>


<body>
<p><h2><?php echo _("Nouvelle vente de la marque") ?></h2></p>
</br>

<?php include ROOT.DS.'Views/Common/menu_vendeur.php'; ?>

<form method="post" action= "<?php echo BASE_URL . '/Creer_une_vente/nouvelleVente' ?>">
<div class="milieu"><br>
<div class="nouvellevente">
	<?php echo _("Nouvelle vente") ?>
	</div>
    <br>
    <?php echo _("Nom de la vente") ?>:  <input type="text" name="nom_vente" required>
    <table class="heure">
        <tr>
            <td><?php echo _("Jour de début") ?></td>
            <td><?php echo _("Heure de début") ?></td>
        </tr>
        <tr>
            <td><input type="date" name="date_debut" required></td>
            <td><input type="time" name="heure_debut" required></td>
        </tr>
        <tr>
            <td><?php echo _("Jour de fin") ?></td>
            <td><?php echo _("Heure de fin") ?></td>
        </tr>
        <tr>
            <td><input type="date" name="date_fin" required></td>
            <td><input type="time" name="heure_fin" required></td>
        </tr>
    </table>

 <pre>        
                <?php echo _("Description de la vente") ?>
        <textarea id="description" name="description" rows="6" cols="45"/></textarea> 
        <input type="submit" class="envoyer" name="valider">
</pre>
</div>
</form>
</body>

</html>