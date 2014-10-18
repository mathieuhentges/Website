<?php

class CommandeController extends Controller {

	public function index(){
		$this->loadModel('Commande');
		$commandes = $this->Commande->recupcommandes($_SESSION["User"]->id);
		$this->render('index',array('commandes'=>$commandes));

		
	}

	public function validerpanier(){
		$this->loadModel('Commande');
		$products = $this->Commande->recupinfos(array_keys($_SESSION['panier']));
		$id_client = $_SESSION['User']->id;
		$etat = "en attente du chèque";
		$liste = NULL;
		$prixtotal = 0;
		for ($i=0; $i < sizeof($products) ; $i++) { 
			$quantite = $_SESSION['panier'][$products[$i]->id_stock];
			$infovendeur = $this->Commande->recupvendeur($products[$i]->vente_id);
			$vendeur = $infovendeur->marque;
			$prixtotal = $prixtotal + $products[$i]->prixfinal * $quantite;
			$liste = $liste."Nom : ".$products[$i]->nom_article." - marque : ".$vendeur." - taille : ".$products[$i]->nom_taille." - couleur : ".$products[$i]->nom_couleur." - Quantité : ".$quantite.'<br>';
		}
		$this->Commande->savedb($etat,$prixtotal,$id_client,$liste);
		$_SESSION['panier'] = array();
		$this->render('validerpanier');

	}
}

?>