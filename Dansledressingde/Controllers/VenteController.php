<?php

//require ROOT.DS.'Core'.DS.'Model.php';

class VenteController extends Controller {

	public $layout = 'layout.php';


	function index() {
		$this->loadModel('Vente');


	}

	public function testvendeur(){

	//print_r($var);
		if(isset($this->request->params[0])){$id = $this->request->params[0];
		$this->render('testvendeur',array('id'=>$id));}
}

	public function affichervente(){
		$this->loadModel('Vente');

		if(!isset($this->request->params[0])){
			$this->table="article";
			$articles=$this->Vente->findAll();
			$this->render('Vente', array('vente' => $articles));
		} else{

			$id= $this->request->params[0];
			$this->table="article";
			$vente=$this->Vente->findArticles($id);
			$this->render('Vente', array('vente' => $vente));


		}


	}	


	


		/*function view() {
		$this -> loadModel('Vente');
		if (isset($_GET['idvendeur'])) {
			$id =$_GET['idvendeur'];
			$result = $this->Vente->findArticle($id);
			if (empty($result)) {
				header('location: '.BASE_URL.'/vente');
			}else {
				
				header('location: '.BASE_URL.'/Listeventes');
			}

		} else{
			header('location:' .BASE_URL.'/login');	

		}
	}

	function afficherarticle($id) {

	
	loadModel('Vente');
	if(isset($id)){
		$result = $this->Vente->findArticle($id);
		if(empty($result)){
			die('Aucun article ne correspond à ce vendeur');
		} 
	} else {
		die('Veuillez sélectionner un vendeur');
	}


	}
*/


	}

