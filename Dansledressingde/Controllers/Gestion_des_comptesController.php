<?php

class Gestion_des_comptesController extends Controller {

	public $layout="layout_admin.php";

	function index() {
		$this -> loadModel('Admin');
		$client = $this->Admin->findAllUser();
		$vendeur = $this->Admin->findAllVendeur();
		if(isset($_SESSION['Admin'])){
		$this->render('index', array('client' => $client, 'vendeur' => $vendeur));
		}else{
			header('location: '.BASE_URL.'/admin');
		}
	}
	
	function deleteUser() {
		$banni = $_GET['user'];
		$this->loadModel('User');
		$this->User->supprimeCompte($banni);
		$this->render('script');		
	}

	function deleteVendeur() {
		$banni = $_GET['user'];
		$this->loadModel('Vendeur');
		$this->Vendeur->supprimeCompte($banni);
		$this->render('script');
	}
}