<?php

class Article extends Model {

		function findCaracsArticle($id){
		$sql = 'SELECT * FROM stock,taille,couleur WHERE stock.article_id= \''.$id.'\' AND taille.id = stock.taille_id AND couleur.id=stock.couleur_id ORDER BY nom_taille';	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}

	function addArticle($article=array()){

			$sql = 'INSERT  INTO article(nom_article ,categorie_id,souscategorie_id,description,vente_id,prixinitial,reduction,prixfinal)
				VALUES(
		"'.$article['nom_article'].'", "'.$article['categorie_id'].'" , "'.$article['souscategorie_id'].'" , "'.$article['description'].'", "'.$article['vente_id'].'",
		"'.$article['prixinitial'].'" , "'.$article['pourcentage'].'" , "'.$article['prixfinal'].'")';
	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}

	function findAllCategorie(){
		$sql = 'SELECT * FROM categorie ORDER BY nom_categorie';	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}

	function findAllSsCategorie(){
		$sql = 'SELECT * FROM sous_categorie ORDER BY nom_souscategorie';	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}

	public function findArticle($article = array()){
		$sql = 'SELECT * FROM '. $this->table .' WHERE nom_article= \''.$article['nom_article'].'\'';
	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return current($pre->fetchAll(PDO::FETCH_OBJ));
	}

	function findAllArticle($id){
		$sql = 'SELECT * FROM vente,article,categorie,sous_categorie WHERE article.vente_id = \''.$id.'\' AND article.vente_id = vente.id_vente 
		AND categorie.id = article.categorie_id AND sous_categorie.id = article.souscategorie_id';	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}

	public function supprimeArticle($id){
		$sql = 'DELETE FROM '. $this->table .' WHERE id_article= "'.$id.'"';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return true;
	}

	public function findVente($id){
		$sql = 'SELECT * FROM vente WHERE id_vente= \''.$id.'\'';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return current($pre->fetchAll(PDO::FETCH_OBJ));
	}

	function findPhoto($id){
		$sql = 'SELECT * FROM vente WHERE id_vente= \''.$id.'\'';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return current($pre->fetchAll(PDO::FETCH_OBJ));
	}

	function addPhoto($img,$id){
		$sql = 'UPDATE  article SET article_url = "'.$img.'" WHERE id_article= "'.$id.'"';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return current($pre->fetchAll(PDO::FETCH_OBJ));
	}

	function findAllStock($id){
		$sql = 'SELECT * FROM images_article, article WHERE article.id_article ="'.$id.'" AND article.id_article = images_article.articleimg_id';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}

	function findArticleById($id){
		$sql = 'SELECT * FROM '. $this->table .' WHERE id_article= \''.$id.'\'';
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

	function findCategorie($id){
		$sql = 'SELECT * FROM categorie WHERE id= \''.$id.'\'';	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return current($pre->fetchAll(PDO::FETCH_OBJ));
	}

	function findsousCategorie($id){
		$sql = 'SELECT * FROM sous_categorie WHERE id= \''.$id.'\'';	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return current($pre->fetchAll(PDO::FETCH_OBJ));
	}

	function assoc($id){
		$sql = 'SELECT DISTINCT souscategorie_id FROM article WHERE categorie_id= \''.$id.'\'';	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);


	}

}