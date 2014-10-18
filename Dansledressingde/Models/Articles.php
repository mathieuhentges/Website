<?php

class Articles extends Model {

	public function loadarticle($id){


		$this->table="articles";

	$sql = 'SELECT * FROM '. $this->table .' WHERE vente_vendeurs_id= \''.$id.'\'';
	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}



}

?>