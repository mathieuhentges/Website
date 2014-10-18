<?php

class User extends Model {

	public function findUser($user = array()){
		$sql = 'SELECT * FROM '. $this->table .' WHERE pseudo= \''.$user['pseudo'].'\' and motdepasse=\''.$user['mdp'].'\'';
	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return current($pre->fetchAll(PDO::FETCH_OBJ));
	}

	public function findAllUser(){
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

	public function addClient($user = array()){
		$sql = 'INSERT  INTO user(pseudo ,motdepasse,nom,prenom,mail,adresse,codepostal,ville,telephone,parrain_id)
				VALUES(
		"'.$user['pseudo'].'", "'.$user['mdp'].'" , "'.$user['nom'].'" , "'.$user['prenom'].'", "'.$user['mail'].'",
		"'.$user['adresse'].'","'.$user['codepostal'].'","'.$user['ville'].'","'.$user['telephone'].'","'.$user['parrain']->id.'")';
	//die($sql);
		
		//mysql_real_escape_string(unescaped_string)  pour protéger mes données

		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}

	public function confirmation($mail){

		if(isset($mail)) {
				$headers = 'Content-type: text/html; charset=UTF-8'."\r\n".'From: no-reply@Dansledressingde.fr'."\r\n";
    			$objet = '[Dans votre dressing] Votre dressing est maintenant ouvert !';
				$message = 'Votre dressing virtuel vient d\'être créé, vous pouvez dès à présent le remplir sur localhost/Dansledressingde';

			 	{
					mail($mail, $objet, $message, $headers);	
					$statut_mail = "Envoyé";		
				} 
			}

	}


	public function alert(){
   $pseud=$_SESSION['User']->pseudo;
   $alert=$_POST['alert'];
   if($alert=='oui'){$al=1;}
   else{$al=0;}
   $sql="UPDATE user SET alerte='$al' WHERE pseudo='$pseud'";
 	$pre = $this->db->exec($sql);
        return $pre;
	}

		public function findUserid($user){
		$sql = "SELECT * FROM user WHERE pseudo= '$user'";
	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return current($pre->fetchAll(PDO::FETCH_OBJ));
	}



	


}