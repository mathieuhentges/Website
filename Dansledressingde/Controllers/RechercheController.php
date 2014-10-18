<?php

class RechercheController extends Controller {

	public function index(){


	}

	public function parcategorie(){
		$categorie= $this->request->params[0];
		$souscategorie= $this->request->params[1];
		$this->loadModel('Recherche');
		$obj_categorie = $this->Recherche->prendreidcat($categorie);
		$obj_souscategorie = $this->Recherche->prendreidsouscat($souscategorie);
		$id_categorie = $obj_categorie->id;
		$id_souscategorie = $obj_souscategorie->id;
		$articles = $this->Recherche->findarticles($id_categorie,$id_souscategorie);
		$this->render('index',array('articles'=>$articles));

	}
}

?>