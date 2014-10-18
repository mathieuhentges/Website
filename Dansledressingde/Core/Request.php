<?php
class Request {

	public $url; //URL appelée par l'utilisateur

	function __construct() {
		if(isset($_SERVER['PATH_INFO'])){  // Permet de vérifier qu'une adresse spécifique a été entrée

			$this->url = $_SERVER['PATH_INFO'];
			
		}
		
	}
}

