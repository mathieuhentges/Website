<br>

<table class="AffichageVente" border = "1">

<?php for ($i=0; $i < sizeof($articles) ; $i++): ?>	
<?php 
$nomarticle = $articles[$i]->nom_article;
$prix = $articles[$i]->prixfinal;
$id = $articles[$i]->id_article;
?>
<tr>
	<td><img src="/Dansledressingde/Webroot/img/Articles/<?php echo($articles[$i]->article_url); ?>" class="img" style="margin-right: 50px" /></td>
	<td><?php echo($nomarticle);?>  <?php echo($prix);?>€ <br> <a href="/Dansledressingde/articles/afficherarticle/<?php echo($id);?>"><?php echo _("Détails"); ?></a></td>
</tr>
<?php endfor; ?>
</table>