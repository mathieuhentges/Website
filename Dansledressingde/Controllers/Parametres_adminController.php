<?php
	
class Parametres_adminController extends Controller {

	public $layout="layout_admin.php";

	function index(){
		if (isset($_SESSION['Admin'])){
			$this->loadModel('Admin');
			$couleur = $this->Admin->findAllCouleur();
			$taille = $this->Admin->findAllTaille();
			$categorie = $this->Admin->findAllCategorie();
			$sscategorie = $this->Admin->findAllSsCategorie();
			$this->render('index', array('couleur' => $couleur, 'taille' => $taille, 'categorie' => $categorie, 'sscategorie' => $sscategorie));
		}else{
			header('location: '.BASE_URL.'/admin');
		}
	}

	function ajoutCouleur(){
		$this->loadModel('Admin');
		$couleur['nom'] = $_POST['ajoutercouleur'];
		$this->Admin->addCouleur($couleur);
		header('location: '.BASE_URL.'/parametres_admin');
	}

	function ajoutTaille(){
		$this->loadModel('Admin');
		$taille['nom'] = $_POST['ajoutertaille'];
		$this->Admin->addTaille($taille);
		header('location: '.BASE_URL.'/parametres_admin');
	}


	function ajoutCategorie(){
		$this->loadModel('Admin');
		$categorie['nom'] = $_POST['ajoutercategorie'];
		$this->Admin->addCategorie($categorie);
		header('location: '.BASE_URL.'/parametres_admin');
	}

	function ajoutSousCategorie(){
		$this->loadModel('Admin');
		$souscategorie['nom'] = $_POST['ajoutersouscategorie'];
		$this->Admin->addSousCategorie($souscategorie);
		header('location: '.BASE_URL.'/parametres_admin');
	}

}
