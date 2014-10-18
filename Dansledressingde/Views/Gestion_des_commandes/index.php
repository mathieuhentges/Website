<?php $_SESSION['url'] = $_SERVER['REQUEST_URI']; ?>

<br>
<table class="AffichageCommandes" border = "1">
	<tr>
		<td><?php echo _("Numero de la commande"); ?></td>
		<td><?php echo _("Montant dû"); ?></td>
		<td><?php echo _("Nom et prénom de l'acheteur"); ?></td>
		<td><?php echo _("Liste des articles"); ?></td>
		<td><?php echo _("Etat"); ?></td>

	</td>

	<?php for ($i=0; $i <sizeof($commandes) ; $i++): ?>

	<tr>
		<td><?php echo($commandes[$i]->commande_id);?></td>
		<td><?php echo($commandes[$i]->prixtotal);?></td>
		<td><?php echo($commandes[$i]->user_id);?></td>
		<td><?php echo($commandes[$i]->liste_produits) ?></td>
		<td><?php echo($commandes[$i]->etat);?></td>
		<td>
			<form action="<?php echo BASE_URL.'/Gestion_des_commandes/modifierEtat/'.$commandes[$i]->commande_id ?>" method="POST">
				<select name="statut">
						<option id="1"><?php echo _("En attente du chèque"); ?></option>
						<option id="2"><?php echo _("Chèque reçu, préparation de la commande"); ?></option>
						<option id="3"><?php echo _("Commande envoyé le"); ?> <?php echo date('d M'); ?></option>
				</select>
				<input type="submit" value="modifier">
			</form>
		</td>
	</tr>
<?php endfor;?>
</table>