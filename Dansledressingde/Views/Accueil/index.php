<head>
	<link rel="stylesheet" href="webroot/css/accueil.css">
	<title> <?php echo _("Votre dressing"); ?></title>
	<style>
		.img { width: 150px; height : 300px;}
	</style>
</head>

<?php include ROOT.DS.'Views/Common/menu.php'; ?>

<?php //print_r($vente);?>

<div class="contenu">
	<table>
	<tbody>
		<td>
			<tr>
	<h3>
	 <a href='Panier'>
	 <?php echo _("Vente en cours :"); ?>
	 </a>
	</h3>
	

	<?php for ($i=0; $i < sizeof($vente) ; $i++) { 
	$venteid = $vente[$i]->id_vente;
	print_r($vente[$i]->heure_debut);
	print_r(date('H:i:s'));
	if($vente[$i]->date_debut<=date('Y-m-d')){
		if($vente[$i]->heure_debut<=date('H:i:s')){


				echo'</tr> <tr>';
	
	echo('<a href="/Dansledressingde/Vente/affichervente/'.$venteid.'">');
	//echo '<br>';
	echo ('<img src="/Dansledressingde/Webroot/img/Articles/'.$vente[$i]->vente_url.'" class="img" style="margin-right: 50px" /> </a>');
	//echo '<br>';
	

		}
	}

	
}

 ?>

</tr>
<tr>
	
	<h3>
		<?php echo _("Prochaines Ventes"); ?>
	</h3>

	<?php for ($i=0; $i < sizeof($vente) ; $i++) { 
	$venteid = $vente[$i]->id_vente;
	$now   = time();
	$date2 = strtotime($vente[$i]->date_debut." ".$vente[$i]->heure_debut);
	$temps=$this->dateDiff($now,$date2);	
	if($vente[$i]->date_debut>date('Y-m-d')){
		

				echo'</tr> <tr>';
	

	//echo '<br>';
	echo ('<span class="aide" title="Encore '.$temps['day'].' jours, '.$temps['hour'].' heures, '.$temps['minute'].' minutes, et '.$temps['second'].' secondes !"><img src="/Dansledressingde/Webroot/img/Articles/'.$vente[$i]->vente_url.'" class="img" style="margin-right: 50px" /></span>');
	//echo('Encore '.$temps['day'].' jours, '.$temps['hour'].' heures, '.$temps['minute'].' minutes, et '.$temps['second'].' secondes !');
	//echo '<br>';


 

 


	
}
}

?>
	
</tr>
</td>
</tbody>
</table>




</div>




