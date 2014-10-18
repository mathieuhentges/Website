<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="/Dansledressingde/Webroot/css/parametresAdmin.css" type='text/css'/>
</head>


<br><h1 class="choixcouleur"><?php echo _("Ajouter Couleur"); ?></h1><br>

<h2 class="ajoutadmin"><?php echo _("Couleurs déjà présentes"); ?>:</h2> <br>
<?php for ($i=0; $i <sizeof($couleur) ; $i++):?>
<?php echo $couleur[$i]->nom_couleur ?> <?php echo '|'?>
<?php endfor ?>
<br><br>

<h2 class="ajoutadmin"><?php echo _("Ajouter une couleur"); ?>: <br>
	<form method="post"  action= "<?php echo BASE_URL . '/Parametres_admin/ajoutCouleur' ?>">
		<input type="text" name="ajoutercouleur"><input type="submit" value="Ajouter la couleur">
	</form>
</h2>



<br><h1 class="choixtaille"><?php echo _("Ajouter Taille"); ?></h1><br>

<h2 class="ajoutadmin"><?php echo _("Tailles déjà présentes"); ?>:</h2> <br>
<?php for ($i=0; $i <sizeof($taille) ; $i++):?>
<?php echo $taille[$i]->nom_taille ?> <?php echo '|'?>
<?php endfor ?>
<br><br>

<h2 class="ajoutadmin"><?php echo _("Ajouter une taille"); ?>: <br>
	<form method="post"  action= "<?php echo BASE_URL . '/Parametres_admin/ajoutTaille' ?>">
		<input type="text" name="ajoutertaille"><input type="submit" value="Ajouter la taille">
	</form>
</h2>



<br><h1 class="choixcategorie"><?php echo _("Ajouter Categorie"); ?></h1><br>

<h2 class="ajoutadmin"><?php echo _("Tailles déjà présentes"); ?>:</h2> <br>
<?php for ($i=0; $i <sizeof($categorie) ; $i++):?>
<?php echo $categorie[$i]->nom_categorie ?> <?php echo '|'?>
<?php endfor ?>
<br><br>

<h2 class="ajoutadmin"><?php echo _("Ajouter une categorie"); ?>: <br>
	<form method="post"  action= "<?php echo BASE_URL . '/Parametres_admin/ajoutCategorie' ?>">
		<input type="text" name="ajoutercategorie"><input type="submit" value="Ajouter la catégorie">
	</form>
</h2>





<br><h1 class="choixsscategorie">Ajouter Sous-categorie</h1><br>

<h2 class="ajoutadmin">Sous-catégories déjà présentes:</h2> <br>
<?php for ($i=0; $i <sizeof($sscategorie) ; $i++):?>
<?php echo $sscategorie[$i]->nom_souscategorie ?> <?php echo '|'?>
<?php endfor ?>
<br><br>

<h2 class="ajoutadmin">Ajouter une sous-catégorie: <br>
	<form method="post"  action= "<?php echo BASE_URL . '/Parametres_admin/ajoutSousCategorie' ?>">
		<input type="text" name="ajoutersouscategorie"><input type="submit" value="Ajouter la sous-catégorie">
	</form>
</h2>



	