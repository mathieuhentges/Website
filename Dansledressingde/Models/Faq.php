<?php

class Faq extends Model {

	public function Recupinfos(){

		$sql = 'SELECT * FROM '. $this->table;
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);


	}


}