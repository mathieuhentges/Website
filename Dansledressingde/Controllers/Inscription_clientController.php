<?php

class Inscription_clientController extends Controller {

	public $layout="layout_no_connect.php";

	function index() {
		$this -> render('index');
	}

	function valid(){
		$this -> LoadModel('User');
		$user['pseudo'] = $_POST['pseudo'];
		$user['mdp'] = sha1($_POST['mdp']);
		$user['nom'] = $_POST['nom'];
		$user['prenom'] = $_POST['prenom'];
		$user['mail'] = $_POST['mail'];
		$user['adresse'] = $_POST['adresse_ent'];
		$user['codepostal'] = $_POST['code_postal'];
		$user['ville'] = $_POST['ville'];
		$user['telephone'] = $_POST['tel'];
		$user['parain'] = $_POST['pn'];


		$user['parrain'] = $this->User->findUserid($user['parain']);
		$this->User->addClient($user);
		$this->User->confirmation($_POST['mail']);
		header('location: '.BASE_URL.'/login');
		
	}
}