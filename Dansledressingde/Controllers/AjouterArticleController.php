<?php

class AjouterArticleController extends Controller {

	public $layout="layout_vendeur.php";

	function index($id) {
		if (isset($_SESSION['Pro'])){
			$this->loadModel('Article');
			$categorie = $this->Article->findAllCategorie();
			$sscategorie = $this->Article->findAllSsCategorie();
			$articleactuel = $this->Article->findAllArticle($id);
			$vente = $this->Article->findVente($id);
			$photo = $this->Article->findPhoto($id);
			if($_SESSION['Pro']->id ==$vente->vendeur_id){
			$this->render('index', array('sscategorie' => $sscategorie, 'categorie' => $categorie,
			 'articleactuel' => $articleactuel, 'vente' => $vente, 'photo' => $photo));}
			else{header('location:'.BASE_URL);}
		}else{
			header('location: '.BASE_URL.'/logpro');
		}
	}

	function newArticle($id){
		$this->loadModel('Article');
		$article['nom_article'] = $_POST['nom_article'];
		$article['categorie_id'] = $_POST['categorie'];
		$article['souscategorie_id'] = $_POST['souscategorie'];
		$article['description'] = $_POST['description'];
		$article['vente_id'] = $id;
		$article['prixinitial'] = $_POST['prixinitial'];
		$article['pourcentage'] = $_POST['pourcentage'];
		$article['prixfinal'] = $_POST['prixfinal'];
		$this->Article->addArticle($article);
		$result = $this->Article->findArticle($article);
		header('location: '.BASE_URL.'/gererStock/index/'.$result->id_article);
	}

	function deleteArticle() {
		$article_id = $_GET['article'];
		$this->loadModel('Article');
		$stock = $this->Article->findAllStock($article_id);
		for ($i=0; $i < sizeof($stock) ; $i++) { 
			$fichier = WEBROOT."/img/Articles/".$stock[$i]->image_url;
			unlink($fichier);
		}
		$article = $this->Article->findArticleById($article_id);
		$fichier = WEBROOT."/img/Articles/".$article->article_url;
		unlink($fichier);
		$this->Article->supprimeArticle($article_id);
		$this->render('script');		
	}

}
