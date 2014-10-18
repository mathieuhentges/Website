<br>

	
		<?php if($prixtotal=="0"){
			echo _("Votre dressing est vide");
		}else{
		foreach($products as $product):
		?>
	

		<a href="/Dansledressingde/articles/afficherarticle/<?= $product->id_article; ?>" class="img"> <img src="/Dansledressingde/Webroot/img/Articles/<?= $product->article_url; ?>" class="img" style="margin-top:150px"/></a>
		<br><?= $product->nom_article; ?>  <br>
		<?php echo _("Prix après réduction"); ?> : <?= number_format($product->prixfinal,2,',',' '); ?> euros <br>
		<?php echo _("Couleur"); ?> : <?= $product->nom_couleur; ?><br>
		<?php echo _("Taille"); ?> : <?= $product->nom_taille; ?></br>
		<?php echo _("Quantité"); ?> : <?= $_SESSION['panier'][$product->id_stock]; ?>
		<br>
		<br>
		<form method="post" action="/Dansledressingde/panier/index/<?php echo $product->id_stock; ?>"><input type="submit" class="envoyer" name="supprimer" value="Supprimer cet article.">
</form>
		<br> 

		<?php endforeach; ?>
		<br>
		<br>
		<?php echo _("Prix total"); ?> : <?php echo($prixtotal); ?> euros.
		<br>

		<br>
		<form method="post" action="/Dansledressingde/commande/validerpanier"><input type="submit" class="envoyer" name="valider" value="Je valide mon panier !">
</form>

		<?php } ?>
