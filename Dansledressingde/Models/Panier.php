<?php 

class Panier extends Model {

	public function recuppanier($ids){


		$sql = 'SELECT * FROM article WHERE id_article IN ('.implode(',',$ids).')';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);


	}

	public function checkstock($id){
		$sql = 'SELECT * FROM  article WHERE id_article = \''.$id.'\'';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);

	}

	public function add($id_stock){
		if(isset($_SESSION['panier'][$id_stock])){
			$_SESSION['panier'][$id_stock]++;
		}else{
			$_SESSION['panier'][$id_stock] = 1;
		}
}

	public function recupinfos($id_stock){

		$sql = 'SELECT * FROM article, stock, taille, couleur WHERE stock.id_stock IN ('.implode(',',$id_stock).') AND stock.article_id = article.id_article AND stock.taille_id = taille.id AND stock.couleur_id = couleur.id';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);

	}

	public function dlstock($id_stock){

		$sql = 'UPDATE stock SET nombre = nombre-1 WHERE id_stock = \''.$id_stock.'\'';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return true;
	}

	public function adstock($id_stock,$quantite){

		$sql = 'UPDATE stock SET nombre = nombre+'.$quantite.' WHERE id_stock = \''.$id_stock.'\'';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return true;


	}


}