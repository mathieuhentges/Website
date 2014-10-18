<?php

class AdminController extends Controller {


	public $layout="layout_no_connect.php";
	

	function index() {
		
		$this->render('index');

		}
	
	function admin() {
		$this -> loadModel('Admin');
		if (isset($_POST['pseudo']) and isset($_POST['mdp'])) {
			$user['pseudo'] = $_POST['pseudo'];
			$user['mdp'] = sha1($_POST['mdp']);
			$result = $this->Admin->findAdmin($user);
			if (empty($result)) {
				header('location: '.BASE_URL.'/admin');
			}else {
				$_SESSION['Admin'] = $result;
				header('location: '.BASE_URL.'/accueil_admin');
			}

		}
	}
}