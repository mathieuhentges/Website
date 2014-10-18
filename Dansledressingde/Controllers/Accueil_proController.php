<?php

class Accueil_proController extends Controller {

	public $layout="layout_vendeur.php";

	function index() {
		if (isset($_SESSION['Pro'])) {
			$this->render('index');
		}else{
			header('location: '.BASE_URL.'/logpro');
		}
	}

	/*function afficherVente(){
		
	}*/
}