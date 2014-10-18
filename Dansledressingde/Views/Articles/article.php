<table class="AffichageArticle" border = "1">
	<?php $nomarticle=$article->nom_article;
	$id = $article->id_article;
	$prixavant = $article->prixinitial;
	$reduction = $article->reduction;
	$prixapres = $article->prixfinal;
	$description = $article->description; ?>
	<tr>
	<td><?php include ROOT.DS.'Views/Common/photogalerieclient.php' ?></td>
	<td><?php echo($nomarticle);?> 
	 <br>
	 <br>
	 <?php echo($description);?>
	 <br>
	 <br>
<?php echo _(""); ?>
	  <span style="text-decoration:line-through; color:red;"><?php echo($prixavant); ?>€ </span>  <b>  <?php echo($prixapres);?>€ </b> 
	  <br> <?php echo _("Soit"); ?> <?php echo($reduction); ?>% <?php echo _("de réduction"); ?> ! <br> <br> 
	  <?php echo _("Choisissez la taille et la couleur"); ?><span class="info">*</span>
	 <br>
	 <form method="post" action="/Dansledressingde/panier/addpanier"><select name="stock">
                        <?php for ($i=0; $i <sizeof($caracs) ; $i++) { 
                            $nom_couleur = $caracs[$i]->nom_couleur;
                            $nom_taille = $caracs[$i]->nom_taille;
                            $id_stock = $caracs[$i]->id_stock;
                            if($caracs[$i]->nombre>0){
                            	echo '<option value="'.$id_stock.'">',$nom_taille,' - ',$nom_couleur,'</option>';
                            }
                        } ?></select>
                        <br>
                        <br>
	  <b> <input type="submit" class="envoyer" name="valider" value="<?php echo _("J'ajoute à mon dressing"); ?> !">  </b> </td> 
</form>
</tr>

</table>



<?php // print_r($caracs);?>










