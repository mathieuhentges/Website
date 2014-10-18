<?php

class Gestion_des_commandesController extends Controller {

	public $layout="layout_admin.php";

	public function index(){
		$this -> loadModel('Admin');
		$commandes = $this->Admin->findcommandes();
		if(isset($_SESSION['Admin'])){
		$this->render('index', array('commandes' => $commandes));
		}else{
			header('location: '.BASE_URL.'/admin');
		}
	}
	

	function modifierEtat($id){
		$this->loadModel('Admin');
		$commandes = $this->Admin->findcommandes();
		$this->Admin->updateStatut($id,$_POST['statut']);
		header('location: '.BASE_URL."/..".$_SESSION['url']);
	}
}