<head> 	
	<style>.img { width: 200px; height: 300px;}</style>
	<title><?php echo _("Liste des articles");?></title>
</head>

<table class="AffichageVente" border = "1">

<?php for ($i=0; $i < sizeof($vente) ; $i++): ?>	
<?php $id = $vente[$i]->id_article;
$nomarticle = $vente[$i]->nom_article;
$prix = $vente[$i]->prixfinal;
?>
<tr>
	<td><img src="/Dansledressingde/Webroot/img/Articles/<?php echo($vente[$i]->article_url); ?>" class="img" style="margin-right: 50px" /></td>
	<td><?php echo($nomarticle);?>  <?php echo($prix);?>€ <br> <a href="/Dansledressingde/articles/afficherarticle/<?php echo($id);?>"><?php echo _("Détails"); ?></a></td>
</tr>
<?php endfor; ?>
</table>
