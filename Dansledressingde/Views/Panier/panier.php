<?php /*<div class="table">

		<?php 
		foreach($products as $product):
		?>
	

		<a href="/Dansledressingde/articles/afficherarticle/<?= $product->id_article; ?>" class="img"> <img src="im/<?= $product->id_article; ?>.jpg" class="img" style="margin-top:150px"/></a>	
		<span class="name"> <?= $product->nom_article; ?> / </span>
		<span class="price">Prix après réduction : <?= number_format($product->prixfinal,2,',',' '); ?> euros / </span>
		<span class="quantity">Quantité : <?= $_SESSION['panier'][$product->id_article]; ?> </span>


	</div>

	<?php endforeach; ?>
	<?php $total= number_format($panier->total(),2,',', ' '); ?>

	<div class="rowtotal" style="margin-top:100px; margin-left:350px;">
		<?php if($panier->total()===0){
			echo"Votre panier est vide.";

		} else {

			echo"<h3>Total : $total euros</h3>";

		} ?>
	

	</div>
*/ ?>