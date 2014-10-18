<?php

class Stock extends Model {

	function addStock($article=array()){

			$sql = 'INSERT  INTO stock(article_id ,taille_id,couleur_id,nombre)
				VALUES(
		"'.$article['article_id'].'", "'.$article['taille_id'].'" , "'.$article['couleur_id'].'" , "'.$article['nombre'].'")';
	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}

	function findAllCouleur(){
		$sql = 'SELECT * FROM couleur ORDER BY nom_couleur';	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}

	function findAllTaille(){
		$sql = 'SELECT * FROM taille ORDER BY nom_taille';	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}

	function findAllStock($id){
		$sql = 'SELECT * FROM article,stock, couleur, taille WHERE stock.article_id = \''.$id.'\' AND stock.article_id = article.id_article AND taille.id = stock.taille_id AND couleur.id = stock.couleur_id';	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}

	public function supprimeStock($id){
		$sql = 'DELETE FROM '. $this->table .' WHERE id_stock= "'.$id.'"';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return true;
	}

	public function findArticle($id){
		$sql = 'SELECT * FROM article WHERE id_article= \''.$id.'\'';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return current($pre->fetchAll(PDO::FETCH_OBJ));
	}

	public function findVente($id){
		$sql = 'SELECT * FROM vente, article WHERE id_article= \''.$id.'\' AND vente.id_vente = article.vente_id';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return current($pre->fetchAll(PDO::FETCH_OBJ));
	}

	function findAllImage($id){
		$sql = 'SELECT * FROM images_article WHERE articleimg_id= \''.$id.'\'';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}

	function findPhoto($id){
		$sql = 'SELECT * FROM article WHERE id_article= \''.$id.'\'';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return current($pre->fetchAll(PDO::FETCH_OBJ));
	}

	function findAllStockcat($categorie_id,$date){
		$sql = 'SELECT * FROM article,stock, couleur, taille, vente WHERE article.categorie_id = \''.$categorie_id.'\' AND stock.article_id = article.id_article AND taille.id = stock.taille_id AND couleur.id = stock.couleur_id AND article.vente_id = vente.id_vente AND vente.date_debut<=\''.$date.'\'';	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);

}

	function findAllStocksouscat($souscategorie_id){
				$sql = 'SELECT * FROM article,stock, couleur, taille, vente WHERE article.souscategorie_id = \''.$souscategorie_id.'\' AND stock.article_id = article.id_article AND taille.id = stock.taille_id AND couleur.id = stock.couleur_id AND article.vente_id = vente.id_vente';	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);



	}
}