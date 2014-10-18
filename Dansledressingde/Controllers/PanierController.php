<?php
class PanierController extends Controller {

	
	function index() {
	if(isset($this->request->params[0])){
	$this->del($this->request->params[0]);} 
		$this->loadModel('Panier');
		$products = $this->Panier->recupinfos(array_keys($_SESSION['panier']));
		$prixtotal = $this->calcultotal($products);
		$this->render('index',array('products' => $products, 'prixtotal'=>$prixtotal));

	}


	public function afficherpanier(){

		$this->loadModel('Panier');
		$ids = array_keys($_SESSION['panier']);
		if(empty($ids)){
			$products = array();
		}else{
		$products = $DB->query('SELECT * FROM articles WHERE id IN ('.implode(',',$ids).')');
	}
	$this->render('panier', array('products' => $products));


	}

	public function addpanier(){

		$this->loadModel('Panier');
		$id_stock = $_POST['stock'];
		if($this->Panier->dlstock($id_stock) == true){
		$this->Panier->add($id_stock);
		$this->render('articleajoute');
	}else{
		die("Problème avec la base de donnée");
	}


	}

	public function del($id_stock){

		if(isset($_SESSION['panier'][$id_stock])){
			$this->loadModel('Panier');
			$quantite=$_SESSION['panier'][$id_stock];
			$this->Panier->adstock($id_stock,$quantite);
			unset($_SESSION['panier'][$id_stock]);
	}


	}

	public function calcultotal($products){
		$this->loadModel('Panier');
		$prixtotal=0;
		for ($i=0; $i <sizeof($products) ; $i++) { 
			$prixtotal = $prixtotal + $products[$i]->prixfinal;			
		}
		return $prixtotal;


	}



}
