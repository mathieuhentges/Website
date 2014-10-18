<?php

class LoginController extends Controller {

	public $layout="layout_no_connect.php";
	

	function index() {

		$this->loadModel('Vente');
		$urls = $this->Vente->findcarroussel();
		$this->render('index', array('urls'=>$urls));

		}	
	function user() {
		$this -> loadModel('User');
		if (isset($_POST['pseudo']) and isset($_POST['mdp'])) {
			$user['pseudo'] = $_POST['pseudo'];
			$user['mdp'] = sha1($_POST['mdp']);
			$result = $this->User->findUser($user);
			if (empty($result)) {
				header('location: '.BASE_URL.'/login');
			}else {
				$_SESSION['User'] = $result;
				header('location: '.BASE_URL.'/accueil');
			}

		}
	}


	
}
?>
