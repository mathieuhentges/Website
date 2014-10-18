<?php

class DressingController extends Controller {

	public $layout="layout.php";
	public $table="Articles";	

	function index() {


	}





	
		/*
		public function add($product_id){
		if(isset($_SESSION['panier'][$product_id])){
			$_SESSION['panier'][$product_id]++;
		}else{
			$_SESSION['panier'][$product_id] = 1;
		}

	}

	public function count(){
		return array_sum($_SESSION['panier']);

	}

	public function del($product_id){

		unset($_SESSION['panier'][$product_id]);
	}

	public function total(){
		$total=0;
		$ids = array_keys($_SESSION['panier']);
		if(empty($ids)){
			$products = array();
		}else{
			$products = $this->DB->query('SELECT id, prix_apres FROM articles WHERE id IN ('.implode(',',$ids).')');
		}
		foreach($products as $product){
			$total += $product->prix_apres * $_SESSION['panier'][$product->id];
		}
		return $total;

}


}
*/

?>

