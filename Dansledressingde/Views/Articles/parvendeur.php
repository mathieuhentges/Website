<?php foreach ($Articles as $article): ?>
	<?php if(!isset($titre)){ $titre=  'Les articles de '.$article->nom_vendeur; } ?>



	<img src="/Dansledresingde/im/<?= $article->id; ?>.jpg" class="img" style="padding-bottom: 25px;">


<?php endforeach ?>

<?php foreach ($Articles as $article): ?>
				<?php echo'<div class="description'.$article->id.'">'; ?>
				<?= $article->nom_article; ?>
				<a href="#" class="price"><?= $article->prix_apres; ?>$</a>
				<?php echo"<br>"; ?>
			<a class="ad" href="/Dansledresingde/addpanier.php?id=<?= $article->id; ?>">
				<?php echo _("Ajouter au dressing"); ?>
			</a>

<?php endforeach ?>