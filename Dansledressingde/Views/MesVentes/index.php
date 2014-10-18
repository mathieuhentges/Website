<html>
<head>
		<link rel="stylesheet" href="/Dansledressingde/Webroot/css/MesVentes.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script> 
        var supprimerVente = function(element){
                var r = confirm("Voulez-vous vraiment supprimer cette vente ?");
                var vente = "vente=" + element;
                if(r == true){
                        $.ajax({
                            type: "GET",
                            data: vente,
                            url: "<?php echo BASE_URL ?>/MesVentes/deleteVente",
                            success: function(data, server_response) {
                                $('#input-'+element).parent().append('<p>Supprimé</p>');
                                $('#input-'+element).remove();
                            }
                        });
                }
        }

    </script>
</head>
<div class="affichervente">
	<table border="1">
		<tr class="titre">
			<td><?php echo _("Nom de la vente"); ?></td>
			<td><?php echo _("Début de la vente"); ?></td>
			<td><?php echo _("Heure de début"); ?></td>
			<td><?php echo _("Fin de la vente"); ?></td>
			<td><?php echo _("Heure de fin"); ?></td>
		</tr>
<?php for ($i=0; $i < sizeof($vente); $i++) :?>

		<tr>
				 <td><?php echo $vente[$i]->nom_vente ?></td>
				 <td><?php echo $vente[$i]->date_debut ?></td>
				 <td><?php echo $vente[$i]->heure_debut ?></td>
				 <td><?php echo $vente[$i]->date_fin ?></td>
				 <td><?php echo $vente[$i]->heure_fin ?></td>
				 <td><a href="<?php echo BASE_URL.'/ajouterArticle/index/'.$vente[$i]->id_vente ?>"><?php echo _("Détails"); ?></a>
					<input type="button" id="input-<?php echo $vente[$i]->id_vente ?>" value="supprimer" 
                                    onclick="supprimerVente(<?php echo $vente[$i]->id_vente ?>)">
				 </td>
		</tr>
<?php endfor; ?>		
	</table>
</div>
</html>