<?php

class Ajouter_adminController extends Controller {

	public $layout="layout_no_connect.php";

	function index() {
		$this -> render('index');
	}

	function valid(){
		$this -> LoadModel('Admin');
		$user['pseudo'] = $_POST['pseudo'];
		$user['mdp'] = sha1($_POST['mdp']);
		$user['nom'] = $_POST['nom'];
		$user['prenom'] = $_POST['prenom'];
		$user['mail'] = $_POST['mail'];



		$this->Admin->addAdmin($user);
		header('location: '.BASE_URL.'/admin');
		
	}
}