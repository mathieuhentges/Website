<head>
	<title><?php echo _(""); ?>Gestion des comptes</title>
	<link rel="stylesheet" href="/Dansledressingde/Webroot/css/gestion_des_comptes.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script> 
		var supprimerClient = function(banni){
				var r = confirm("Voulez-vous vraiment supprimer "+banni + "?");
				var user = "user=" + banni;
				if(r == true){
						$.ajax({
							type: "GET",
							data: user,
							url: "<?php echo BASE_URL ?>/gestion_des_comptes/deleteUser",
							success: function(data, server_response) {
								$('#input-'+banni).parent().append('<p>Supprimé</p>');
								$('#input-'+banni).remove();
							}
						});
				}
		}

		var supprimerVendeur = function(banni){
				var r = confirm("Voulez-vous vraiment supprimer "+banni + "?");
				var user = "user=" + banni;
				if(r == true){
						$.ajax({
							type: "GET",
							data: user,
							url: "<?php echo BASE_URL ?>/gestion_des_comptes/deleteVendeur",
							success: function(data, server_response) {
								$('#input-'+banni).parent().append('<p>Supprimé</p>');
								$('#input-'+banni).remove();
							}
						});
				}
		}

	</script>
</head>

<body>
		
	<h2><?php echo _(""); ?>Listes des clients:</h2><br>
	<table border="2">
		<tr class="colonne">
			<td><b><?php echo _("ID"); ?></b></td>
			<td><b><?php echo _("Pseudo"); ?></b></td>
			<td><b><?php echo _("Nom"); ?></b></td>
			<td><b><?php echo _("Prénom"); ?></b></td>
			<td><b><?php echo _("Mail"); ?></b></td>
		</tr>		
	<?php 
		echo '<br>';
 	for ($i=0; $i < sizeof($client); $i++) { 
		$id = $client[$i]->id;
		$pseudo = $client[$i]->pseudo;
		$nom = $client[$i]->nom;
		$prenom = $client[$i]->prenom;
		$mail = $client[$i]->mail;
		$banni[$i]=$client[$i]->pseudo;
		echo '<tr class="user">',
				 '<td>',$id,'</td>',
				 '<td class="clientName">',$pseudo,'</td>',
				 '<td>',$nom,'</td>',
				 '<td>',$prenom,'</td>',
				 '<td>',$mail,'</td>',
				 '<td><input type="button" name="supprimer" id="input-'.$banni[$i].'" onclick="supprimerClient(\''.$banni[$i].'\')" class="envoyer" value="Supprimer"></td>';
		echo '</tr>';

	} 
	?>

	</table>

	<br>
	<h2><?php echo _("Listes des vendeurs"); ?>:</h2>

	<table border="2">
		<tr class="colonne">
			<td><b><?php echo _("ID"); ?></b></td>
			<td><b><?php echo _("Pseudo"); ?></b></td>
			<td><b><?php echo _("Marque"); ?></b></td>
			<td><b><?php echo _("Nom du dirigeant"); ?></b></td>
			<td><b><?php echo _("Mail"); ?></b></td>
		</tr>	
	<?php 
		echo '<br>';
 	for ($i=0; $i < sizeof($vendeur); $i++) { 
		$id = $vendeur[$i]->id;
		$pseudo = $vendeur[$i]->pseudo;
		$marque = $vendeur[$i]->marque;
		$nomdirigeant = $vendeur[$i]->nomdirigeant;
		$mail = $vendeur[$i]->mail;
		$banni[$i]=$vendeur[$i]->pseudo;
		echo '<tr class="user">',
				 '<td>',$id,'</td>',
				 '<td class="clientName">',$pseudo,'</td>',
				 '<td>',$marque,'</td>',
				 '<td>',$nomdirigeant,'</td>',
				 '<td>',$mail,'</td>',
				 '<td><input type="button" name="supprimer" id="input-'.$banni[$i].'" onclick="supprimerVendeur(\''.$banni[$i].'\')" class="envoyer" value="Supprimer"></td>';
		echo '</tr>';
	} 
	?>

	</table>
	<br><br>
</body>
	