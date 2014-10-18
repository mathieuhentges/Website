<?php

class Inscription_vendeurController extends Controller {

	public $layout="layout_no_connect.php";

	function index() {
		$this -> render('index');
	}


	function valid(){
		$this -> LoadModel('Vendeur');
		$user['pseudo'] = $_POST['pseudo'];
		$user['mdp'] = sha1($_POST['mdp']);
		$user['marque'] = $_POST['marque'];
		$user['nomdirigeant'] = $_POST['nom'];
		$user['mail'] = $_POST['mail'];
		$user['adresse'] = $_POST['adresse_ent'];
		$user['codepostal'] = $_POST['code_postal'];
		$user['ville'] = $_POST['ville'];
		$user['telephone'] = $_POST['tel'];



		$this->Vendeur->addVendeur($user);
		header('location: '.BASE_URL.'/logpro');
		
	}
}