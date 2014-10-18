<?php

class Vente extends Model {

		public function findArticles($id){
			$sql = 'SELECT * FROM article WHERE vente_id ='.$id;
			$pre = $this->db->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_OBJ);


		}

		function findAllCategorieMenu(){
		$sql = 'SELECT id_article, categorie_id, id, nom_categorie FROM article, categorie WHERE categorie.id=article.categorie_id';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}

		function addVente($vente=array()){

			$sql = 'INSERT  INTO vente(nom_vente ,vendeur_id, date_debut,heure_debut,date_fin,heure_fin,description)
				VALUES(
		"'.$vente['nom_vente'].'", "'.$vente['vendeur_id'].'", "'.$vente['date_debut'].'" , "'.$vente['heure_debut'].'", "'.$vente['date_fin'].'",
		"'.$vente['heure_fin'].'" , "'.$vente['description'].'")';

		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
		}


		function allVente($id){
			$sql = 'SELECT * FROM '. $this->table .' WHERE vendeur_id=\''.$id.'\'';
	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
		}

		public function supprimeVente($id){
		
		$sql = 'DELETE FROM '. $this->table .' WHERE id_vente= "'.$id.'"';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return true;
	}

	public function findVente($vente = array()){
		$sql = 'SELECT * FROM '. $this->table .' WHERE nom_vente= \''.$vente['nom_vente'].'\'';
	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return current($pre->fetchAll(PDO::FETCH_OBJ));
	}

	public function findVenteById($id){
		$sql = 'SELECT * FROM '. $this->table .' WHERE id_vente= \''.$id.'\'';
	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return current($pre->fetchAll(PDO::FETCH_OBJ));
	}

	public function addPhoto($img,$id){
		$sql = 'UPDATE  vente SET vente_url = "'.$img.'" WHERE id_vente= "'.$id.'"';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return current($pre->fetchAll(PDO::FETCH_OBJ));
	}

	public function addCarroussel($img,$id){
		$sql = 'UPDATE  vente SET carroussel_url = "'.$img.'" WHERE id_vente= "'.$id.'"';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return current($pre->fetchAll(PDO::FETCH_OBJ));
	}

	function findAllArticle($id){
		$sql = 'SELECT * FROM article WHERE vente_id= \''.$id.'\'';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}

	function findAllPhotos($id){
		$sql = 'SELECT * FROM images_article WHERE articleimg_id= \''.$id.'\'';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}

		public function findcategories(){
		$sql = 'SELECT nom_categorie FROM categorie';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
		}
		
		public function findsouscategories(){
		$sql = 'SELECT nom_souscategorie FROM sous_categorie';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
		}

		public function findcarroussel(){
			$sql = 'SELECT carroussel_url FROM vente';
			$pre = $this->db->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_OBJ);


		}

		  function Purgeventes($vente){
  
  $sql="DELETE FROM vente WHERE id_vente ='$vente->id_vente'";
  $pre = $this->db->exec($sql);
        return true;
  }

  		function allVentes(){
			$sql = 'SELECT * FROM '. $this->table;
	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
		}

		
}