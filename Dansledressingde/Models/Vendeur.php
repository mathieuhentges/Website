<?php

class Vendeur extends Model {


	public function findVendeur($user = array()){
		$sql = 'SELECT * FROM '. $this->table .' WHERE pseudo= \''.$user['pseudo'].'\' and motdepasse=\''.$user['mdp'].'\'';
	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return current($pre->fetchAll(PDO::FETCH_OBJ));
	}

	public function findAllVendeur(){
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

	public function addVendeur($user = array()){
		$sql = 'INSERT  INTO vendeur(pseudo ,motdepasse,marque,nomdirigeant,mail,adresse,codepostal,ville,telephone)
				VALUES(
		"'.$user['pseudo'].'", "'.$user['mdp'].'" , "'.$user['marque'].'" , "'.$user['nomdirigeant'].'", "'.$user['mail'].'",
		"'.$user['adresse'].'","'.$user['codepostal'].'","'.$user['ville'].'","'.$user['telephone'].'")';

		
		//mysql_real_escape_string(unescaped_string)  pour protéger mes données

		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}

	public function findVendeurbyid($id){
		$sql = 'SELECT marque FROM vendeur WHERE id= \''.$id.'\'';
	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return current($pre->fetchAll(PDO::FETCH_OBJ));
	}


		public function findalerte(){
		$sql = 'SELECT * FROM user WHERE alerte = "1"' ;
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);

	}
}