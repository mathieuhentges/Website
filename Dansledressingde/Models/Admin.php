<?php

class Admin extends Model {

	public function findAdmin($user = array()){
		$sql = 'SELECT * FROM '. $this->table .' WHERE pseudo= \''.$user['pseudo'].'\' and motdepasse=\''.$user['mdp'].'\'';
	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}

	public function findAllAdmin(){
		$sql = 'SELECT * FROM '. $this->table ;
	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}

	public function supprimeCompte($pseudo){
		
		$sql = 'DELETE FROM '. $this->table .' WHERE pseudo= "'.$pseudo.'"';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return true;
	}

	public function addAdmin($user = array()){
		$sql = 'INSERT  INTO admin(pseudo,motdepasse,nom,prenom,mail)
				VALUES(
		"'.$user['pseudo'].'", "'.$user['mdp'].'" , "'.$user['nom'].'" , "'.$user['prenom'].'", "'.$user['mail'].'")';

		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}
	
	public function findAllVendeur(){
		$sql = 'SELECT * FROM Vendeur';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}

	public function findAllUser(){
		$sql = 'SELECT * FROM User' ;
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

	function addCategorie($categorie){
		$sql = 'INSERT INTO categorie(nom_categorie) VALUES ("'.$categorie['nom'].'")';
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

	function addSousCategorie($souscategorie){
		$sql = 'INSERT INTO sous_categorie(nom_souscategorie) VALUES ("'.$souscategorie['nom'].'")';
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

	function addCouleur($couleur){
		$sql = 'INSERT INTO couleur(nom_couleur) VALUES ("'.$couleur['nom'].'")';
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

	function addTaille($taille){
		$sql = 'INSERT INTO taille(nom_taille) VALUES ("'.$taille['nom'].'")';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}

	function findcommandes(){
		$sql = 'SELECT * FROM commande ORDER BY etat';	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);


	}

	function updateStatut($id,$etat){
		$sql ='UPDATE commande SET etat=\''.$etat.'\' WHERE commande_id=\''.$id.'\'';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return current($pre->fetchAll(PDO::FETCH_OBJ));

	}
}