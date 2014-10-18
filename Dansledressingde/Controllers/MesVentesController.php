<?php

class MesVentesController extends Controller {

	public $layout="layout_vendeur.php";

	function index() {
		$vendeur= $_SESSION['Pro']->id;
		$this -> loadModel('Vente');
		$vente = $this->Vente->allVente($vendeur);
		if (isset($_SESSION['Pro'])) {
			$this -> render('index', array('vente' => $vente));
		}else{
			header('location: '.BASE_URL.'/logpro');
		}
	}

	function afficherVente(){
		$vente = $_GET['vente'];
		$this->loadModel('Vente');
		$this->Vente->afficheVente($id);
		$this->render('script');
	}

	function deleteVente() {
		$vente_id = $_GET['vente'];
		$this->loadModel('Vente');
		//On supprime la photo de la vente et la photo du carroussel
		$vente = $this->Vente->findVenteById($vente_id);
		$photo = WEBROOT."/img/Articles/".$vente->vente_url;
		$carroussel = WEBROOT."/img/Articles/".$vente->carroussel_url;
		unlink($photo);
		unlink($carroussel);
		//On supprime les photos de tous les articles
		$article = $this->Vente->findAllArticle($vente_id);
		for ($i=0; $i <sizeof($article) ; $i++) { 
			$photoarticle = WEBROOT."/img/Articles/".$article[$i]->article_url;
			unlink($photoarticle);
			$photos = $this->Vente->findAllPhotos($article[$i]->id_article);
			for ($j=0; $j <sizeof($photos) ; $j++) { 
				$photo = WEBROOT."/img/Articles/".$photos[$j]->image_url;
				unlink($photo);
			}
		}
		$this->Vente->supprimeVente($vente_id);
		$this->render('script');		
	}
}