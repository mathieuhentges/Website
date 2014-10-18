<?php
class AccueilController extends Controller {

	
	function index() {
		/*
		*	Récupère la liste des ventes et les catégories nécessaires à l'affichage de
		*	l'accueil et de son menu de recherche.
		*/
		$this->loadModel('Vente');
		$vente = $this->Vente->findAll();
		$date = date('Y-m-d');
		if (isset($_SESSION['User'])) {
			$categories = $this->Vente->findcategories();
			$listcategoriespresentes = $this->testpresencecat($categories,$date);			
			$categoriespresentes = $this->takenomcat($listcategoriespresentes);
			$souscategories = $this->assoccat($categoriespresentes);
			$souscatassoc = $this->takenomsouscat($souscategories);
			$this->purgevente();
			$this->render('index', array('vente' => $vente, 'categories'=>$categoriespresentes, 'souscategories'=>$souscatassoc));
		}else{
			header('location: '.BASE_URL.'/login');
		}
		
	}

	public function testpresencecat($categorie,$date){
		$this->loadModel('Stock');
		/*
		* Permet de ne récupérer que les catégories ayant au moins un article en vente actuellement.
		*/
		$presence=array(); 
		for ($i=0; $i <=sizeof($categorie) ; $i++) { 
			$products = $this->Stock->findAllStockcat($i,$date);
			if($products != array()){
				$presence[$i]="1";
			}else{
				$presence[$i]="0";
			}
		}
		return $presence;

	}

	public function takenomcat($list){
		$this->loadModel('Article');
		/*
		*	Permet de récupérer le nom des catégories présentes et d'en faire la liste.
		*/
		$result=array();
		$j=0;
		for ($i=0; $i <sizeof($list) ; $i++) { 
			if($list[$i]=="1"){
				if(!isset($result[$j])){
					$result[$j]=$this->Article->findCategorie($i);
				}else{
				$result[$j+1] =  $this->Article->findCategorie($i);
				$j = $j+1;
			}
			}
		}
		return $result;
	}

		public function takenomsouscat($list){
			/*
			*	Permet de récupérer le nom des sous-catégories et de l'afficher dans un tableau
			*	contenu lui-même dans un tableau permettant d'associer les sous-catégories aux
			*	catégories dont elles découlent.
			*/
		$this->loadModel('Article');
		$result=array();
		for ($i=0; $i <sizeof($list) ; $i++) {
			for ($j=0; $j < sizeof($list[$i]); $j++) { 
			 	$result[$i][$j]=$this->Article->findsousCategorie($list[$i][$j]->souscategorie_id);
			 } 
			
		}
		return $result;
			}
		
		
	

	public function assoccat($Liste_Categories){
		/*
		*	Permet de récupérer la liste des sous-catégories présentes 
		*/
		$this->loadModel('Article');
		$soustab=array();
		$souscategories=array($soustab);
		for ($i=0; $i <sizeof($Liste_Categories) ; $i++) {
			$soustab[$i] = $this->Article->assoc($Liste_Categories[$i]->id);
		}
		for ($i=0; $i <sizeof($Liste_Categories) ; $i++) { 
			$souscategories[$i] = $soustab[$i];
		}		
		return($souscategories);
	}


	public function dateDiff($date1, $date2){
   		 $diff = abs($date1 - $date2); // abs pour avoir la valeur absolute, ainsi éviter d'avoir une différence négative
  		  $retour = array();
 	
  		  $tmp = $diff;
   		 $retour['second'] = $tmp % 60;
 
  		  $tmp = floor( ($tmp - $retour['second']) /60 );
   		 $retour['minute'] = $tmp % 60;
 
  		  $tmp = floor( ($tmp - $retour['minute'])/60 );
 		   $retour['hour'] = $tmp % 24;
 
   		 $tmp = floor( ($tmp - $retour['hour'])  /24 );
  		  $retour['day'] = $tmp;
 
  		  return $retour;
}

	public function purgevente(){

		$this->loadModel('Vente');
		$ventes = $this->Vente->AllVentes();
		$hiermoche   = time() - 86400;
		$hier = date('Y-m-d', $hiermoche);
		$hier_explode=explode("/" , $hier);
		//print_r($hier_explode);
		//$annee = $hier_explode([2]);
		//$moisdhier = $hier_explode([1]);
		//$hierjour = $hier_explode([0]);
		for ($i=0; $i <sizeof($ventes) ; $i++) { 
			$vente_explode = explode("/", $ventes[$i]->date_fin);
			//print_r($vente_explode);
			if ($hier_explode>$vente_explode) {
				$this->Vente->Purgeventes($ventes[$i]);
			}
			
		}



	}


}	