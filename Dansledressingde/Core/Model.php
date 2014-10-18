<?php

class Model {

	static $connections = array();
	public $conf = 'default'; //
	public $table = false;
	public $db;
	

	public function __construct() {
		// Connexion à la base de données
		$conf = Config::$database[$this->conf];
		if (isset(Model::$connections[$this->conf])) {
			$this->db = Model::$connections[$this->conf];
			return true;
		}
		try { 
			$pdo = new PDO('mysql:host='.$conf['host'].';dbname='.$conf['database'].';',
				$conf['login'], $conf['password'], array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
			Model::$connections[$this->conf] = $pdo;
			$this->db = $pdo;
		}catch(PDOException $e){
			if (Config::$debug >= 1) {
				die($e->getMessage());
			}else{
				die('Impossible de se connecter à la base de données');
			} 
		}
		// Initialisation de quelques variables
		if ($this->table === false) {
			$this->table = strtolower(get_class($this)); // On met le nom de la classe en minuscule pour 
														 // que par la suite, il fasse le lien entre la classe 
														 // et une table de la BDD
		}
				if(!isset($_SESSION)){
			session_start();
		}
		if(!isset($_SESSION['panier'])){
			$_SESSION['panier'] = array();
		}
		


	}

	public function findAll() {// Execute des requêtes pour trouver toutes les entrées de la BDD
		$sql = 'SELECT * FROM '.$this->table.'';
		$pre = $this->db->prepare($sql);  // On les preparent
		$pre->execute();				//On les executent
		return $pre->fetchAll(PDO::FETCH_OBJ); //On les récupère sous forme d'objet
	}
	
	public function find($req){
		//$req requete
		//$pre pour préparer l'envoi de la requete
		$sql = ' SELECT * FROM '.$this->table.' as '.get_class($this).'';
		if (isset($req['conditions'])) {
			$sql .= ' WHERE '.$req['conditions'];
		}
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}

	public function findFirst($req) {
		return current($this->find($req));
	}






}