<?php

class GererStockController extends Controller {

	public $layout="layout_vendeur.php";

	function index($id) {
		if (isset($_SESSION['Pro'])){
			$this->loadModel('Stock');
			$couleur = $this->Stock->findAllCouleur();
			$taille = $this->Stock->findAllTaille();
			$article = $this->Stock->findArticle($id);
			$vente = $this->Stock->findVente($id);
			$photo = $this->Stock->findPhoto($id);
			$image = $this->Stock->findAllImage($id);
			$stockactuel = $this->Stock->findAllStock($id);
			if($_SESSION['Pro']->id ==$vente->vendeur_id){
			$this->render('index', array('couleur' => $couleur, 'taille' => $taille, 'stockactuel' => $stockactuel,
			 'article' => $article, 'vente' => $vente, 'image'=> $image, 'photo' => $photo));}
			else{header('location:'.BASE_URL);}
		}else{
			header('location: '.BASE_URL.'/logpro');
		}	
	}

	function newStock($id){
		$this->loadModel('Stock');
		$article = $this->Stock->findArticle($id);
		$stock['article_id'] = $article->id_article;
		$stock['taille_id'] = $_POST['taille'];
		$stock['couleur_id'] = $_POST['couleur'];
		$stock['nombre'] = $_POST['quantite'];
		$this->Stock->addStock($stock);
		header('location: '.BASE_URL.'/gererStock/index/'.$id);
	}

	function deleteStock() {
		$stock = $_GET['stock'];
		$this->loadModel('Stock');
		$this->Stock->supprimeStock($stock);
		$this->render('script');		
	}

	function newPhoto($id){
		$this->loadModel('Image');
		if (!empty($_FILES)) {
		    $img = $_FILES['img'];
		    $a = pathinfo($img['name']);
		    $extension =$a['extension'];
		    while (!isset($nom)) {
		    	for ($i=0; $i < 20 ; $i++) { 
		    	if (!file_exists(WEBROOT."/img/Articles/".md5($id."-".$i).".".$extension)) {	    		
		    		$nom = md5($id."-".$i);
		    	}
		    }
		    }
		    	    
		    $ext = strtolower(substr($img['name'], -3));
		    $allow_ext = array("jpg", "png", "gif");
    		if (in_array($ext, $allow_ext)) {
      			 move_uploaded_file($img['tmp_name'], WEBROOT."/img/Articles/" .$nom.".".$extension);
      			 $this->Image->addImage($nom.".".$extension,$id);
    		} else {
       			 $erreur = "Votre fichier n'est pas une image";
    		}
		}
		header('location: '.BASE_URL.'/gererStock/index/'.$id);
	}

	function deletePhoto(){
		$photo_id = $_GET['photo'];
		$this->loadModel('Image');
		$photo = $this->Image->findImageById($photo_id);
		$id = $photo->articleimg_id;
		$image = $photo->image_url;
		$fichier = WEBROOT."/img/Articles/".$image;
     	unlink($fichier);
		$this->Image->supprimePhoto($photo->id);
		$this->render('script');
	}

	function photoPrincipale($id){
		$this->loadModel('Article');
		if (!empty($_FILES)) {
		    $img = $_FILES['vente'];
		    $a = pathinfo($img['name']);
		    $nom = md5($id);
		    $extension =$a['extension'];
		    $ext = strtolower(substr($img['name'], -3));
		    $allow_ext = array("jpg", "png", "gif");
    		if (in_array($ext, $allow_ext)) {
      			 move_uploaded_file($img['tmp_name'], WEBROOT."/img/Articles/".$nom.".".$extension);
      			 $this->Article->addPhoto($nom.".".$extension,$id);
    		} else {
       			 $erreur = "Votre fichier n'est pas une image";
    		}
		}
		header('location: '.BASE_URL.'/gererStock/index/'.$id);
	}

}
