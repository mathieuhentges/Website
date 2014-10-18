<br>
<?php echo _("Mes commandes en cours :") ?> 
<br><br>
<br><br>


<table class="Commandesencours" border = "1">

<?php for ($i=0; $i <sizeof($commandes) ; $i++): ?> 
<?php
$commandeid = $commandes[$i]->commande_id; 
$etat = $commandes[$i]->etat;
$prixtotal = $commandes[$i]->prixtotal;
$liste = $commandes[$i]->liste_produits;
?>
<tr>
	<td><?php echo _("Numéro de la commande") ?> : <?php echo($commandeid);?></td>
	<td><?php echo _("Etat de la vente") ?> : <?php echo($etat);?></td>
	<td><?php echo _("Prix total") ?> : <?php echo($prixtotal);?></td>
	<td><?php echo _("Contenu de la vente") ?> : <?php echo($liste);?></td>
</tr>

<?php endfor; ?>

</table>

<?php //print_r($products); ?>

