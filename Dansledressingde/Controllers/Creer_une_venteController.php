<?php

class Creer_une_venteController extends Controller {

	public $layout="layout_vendeur.php";
	
	function index() {
		if (isset($_SESSION['Pro'])) {
			$this->render('index');
		}else{
			header('location: '.BASE_URL.'/logpro');
		}
	}

	function nouvelleVente(){
		$this->loadModel('Vente');
		$vente['nom_vente'] = $_POST['nom_vente'];
		$vente['vendeur_id'] = $_SESSION['Pro']->id;
		$vente['date_debut'] = $_POST['date_debut'];
		$vente['heure_debut'] = $_POST['heure_debut'];
		$vente['date_fin'] = $_POST['date_fin'];
		$vente['heure_fin'] = $_POST['heure_fin'];
		$vente['description'] = $_POST['description'];
		if (date('Y-m-d')>$vente['date_debut'] OR $vente['date_debut']>$vente['date_fin']) {
			header('location: '.BASE_URL.'/Creer_une_vente');
		}else{
		$this->Vente->addVente($vente);
		$result = $this->Vente->findVente($vente);
		$this->Alertemail($vente['vendeur_id'],$vente['date_debut']);
		header('location: '.BASE_URL.'/ajouterArticle/index/'.$result->id_vente);}
	}

	function photoVente($id){
		$this->loadModel('Vente');
		if (!empty($_FILES)) {
		    $img = $_FILES['vente'];
		    $a = pathinfo($img['name']);
		    $nom = md5($id."v");
		    $extension =$a['extension'];
		    $ext = strtolower(substr($img['name'], -3));
		    $allow_ext = array("jpg", "png", "gif");
    		if (in_array($ext, $allow_ext)) {
      			 move_uploaded_file($img['tmp_name'], WEBROOT."/img/Articles/".$nom.".".$extension);
      			 $this->Vente->addPhoto($nom.".".$extension,$id);
    		} else {
       			 $erreur = "Votre fichier n'est pas une image";
    		}
		}
		header('location: '.BASE_URL.'/ajouterArticle/index/'.$id);
	}


	function photoCarroussel($id){
		$this->loadModel('Vente');
		if (!empty($_FILES)) {
		    $img = $_FILES['carroussel'];
		    $a = pathinfo($img['name']);
		    $nom = md5($id."c");
		    $extension =$a['extension'];
		    $ext = strtolower(substr($img['name'], -3));
		    $allow_ext = array("jpg", "png", "gif");
    		if (in_array($ext, $allow_ext)) {
      			 move_uploaded_file($img['tmp_name'], WEBROOT."/img/Articles/".$nom.".".$extension);
      			 $this->Vente->addCarroussel($nom.".".$extension,$id);
    		} else {
       			 $erreur = "Votre fichier n'est pas une image";
    		}
		}
		header('location: '.BASE_URL.'/ajouterArticle/index/'.$id);
	}

	function Alertemail($vendeur_id,$date){
		$this->loadModel('Vendeur');
		$nom_vendeur=$this->Vendeur->findVendeurbyid($vendeur_id);
		$listeenvoi = $this->Vendeur->findalerte();
		print_r($listeenvoi);
		for ($i=0; $i <sizeof($listeenvoi) ; $i++) { 
			$this->mailinfo($listeenvoi[$i]->mail,$nom_vendeur,$date);
		}
		return true;


	}

		public function mailinfo($mail,$nom_vendeur,$date){


			$newDate = date("d-m-Y", strtotime($date));

		if(isset($mail)) {
				$headers = 'Content-type: text/html; charset=UTF-8'."\r\n".'From: no-reply@Dansledressingde.fr'."\r\n";
    			$objet = '[Dans votre dressing] Une nouvelle vente est maintenant disponible !';
				$message = 'Une nouvelle vente de '.$nom_vendeur->marque.' sera disponible le '.$newDate.' ! N\'hésitez pas à venir remplir votre dressing !';

			 	{
					mail($mail, $objet, $message, $headers);	
					$statut_mail = "Envoyé";		
				} 
			}
			return true;
	

	}
}