<?php

class Dressing extends Model {

	/*public function findUser($user = array()){
		$sql = 'SELECT * FROM '. $this->table .' WHERE role = \'client\' AND pseudo= \''.$user['pseudo'].'\' and motdepasse=\''.$user['mdp'].'\'';
	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return current($pre->fetchAll(PDO::FETCH_OBJ));
	}*/

	public function adddressing(){
		$this->Loadmodel('Dressing');
		if(isset( $this->request->params[0])){
		$req->table="articles";
		$req->conditions="id=:id', array('id' => $this->request->params[0] )";
	$product = $this->find('SELECT id FROM articles WHERE id=:id', array('id' => $_GET['id']));
	if(empty($product)){
		die("Ce produit n'existe pas!");
	}
	$panier->add($product[0]->id);
	die('Le produit est ajoute dans votre panier!<a href="javascript:history.back()"> retourner sur le catalogue');

}else{
	die("Vous n'avez pas selectionne de produit a ajouter au panier");
}
	}
 


}

?>