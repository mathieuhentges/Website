<?php 

class Recherche extends Model {

	public function prendreidcat($nom_categorie){
		$sql = 'SELECT id FROM categorie WHERE nom_categorie = \''.$nom_categorie.'\'';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return current($pre->fetchAll(PDO::FETCH_OBJ));

	}

		public function prendreidsouscat($nom_souscategorie){
		$sql = 'SELECT id FROM sous_categorie WHERE nom_souscategorie = \''.$nom_souscategorie.'\'';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return current($pre->fetchAll(PDO::FETCH_OBJ));

	}

	public function findarticles($id_categorie, $id_souscategorie){

		$sql = 'SELECT * FROM article WHERE categorie_id = \''.$id_categorie.'\' AND souscategorie_id = \''.$id_souscategorie.'\'';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);

	}

}

?>