<?php

class Image extends Model {

	public function addImage($img,$id){
		$sql = 'INSERT INTO images_article(articleimg_id , image_url) VALUES("'.$id.'", "'.$img.'")';
	
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return current($pre->fetchAll(PDO::FETCH_OBJ));
	}

	public function supprimePhoto($id){
		$sql = 'DELETE FROM images_article WHERE id= "'.$id.'"';
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return true;
	}

	public function findImageById($id) {
		$sql = 'SELECT * FROM images_article WHERE id = '.$id;
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return current($pre->fetchAll(PDO::FETCH_OBJ));	
	}
}