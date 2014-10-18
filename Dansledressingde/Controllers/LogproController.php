<?php

class LogproController extends Controller {

	public $layout="layout_no_connect.php";

	function index() {
	}

	function vendeur() {
		$this -> loadModel('Vendeur');
		if (isset($_POST['pseudo']) and isset($_POST['mdp'])) {
			$user['pseudo'] = $_POST['pseudo'];
			$user['mdp'] = sha1($_POST['mdp']);
			$result = $this->Vendeur->findVendeur($user);
			if (empty($result)) {
				header('location: '.BASE_URL.'/logpro');
			}else {
				$_SESSION['Pro'] = $result;
				header('location: '.BASE_URL.'/accueil_pro');
			}

		}
	}
}