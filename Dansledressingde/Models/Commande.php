<?php

class Commande extends Model {

		public function recupinfos($id_stock){

		$sql = 'SELECT * FROM article, stock, taille, couleur WHERE stock.id_stock IN ('.implode(',',$id_stock).') AND stock.article_id = article.id_article AND stock.taille_id = taille.id AND stock.couleur_id = couleur.id';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}

	public function recupvendeur($id_vente){

		$sql = 'SELECT * FROM vente, vendeur WHERE vente.id_vente = \''.$id_vente.'\' AND vendeur.id = vente.vendeur_id';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return current($pre->fetchAll(PDO::FETCH_OBJ));
	}

	public function savedb($etat,$prixtotal,$id_client,$liste){

		$sql = 'INSERT INTO commande(etat, prixtotal, user_id, liste_produits) VALUES (
			"'.$etat.'", "'.$prixtotal.'" , "'.$id_client.'" , "'.$liste.'")';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return true;
	}


	public function recupcommandes($id_client){

		$sql = 'SELECT * FROM commande WHERE user_id  = \''.$id_client.'\'';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);		




	}
}

?>