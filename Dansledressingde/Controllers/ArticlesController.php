<?php

class ArticlesController extends Controller {


	
	public $layout = 'layout.php';

	public function index(){



	}

	public function parvendeur(){
		//$Articles = ROOT.DS.'Models'.DS.'Articles.php';

		$this->loadModel('Articles');

		if(isset($this->request->params[0]))
			{
				$idvendeur = $this->request->params[0];
				$articles = $this->Articles->loadarticle($idvendeur);
				$this->render('parvendeur',array('Articles' => $articles));




			}
		if(!isset($this->request->params[0]))
		{

			$this->table="Articles";
			$articles=$this->Articles->findAll();
			$this->render('parvendeur', array('Articles' => $articles));

		}

	}

	public function parvente(){



	}

	public function afficherarticle($id){

		$this->loadModel('Article');
		$article = $this->Article->findArticleByID($id);
		$image = $this->Article->findAllImage($id);
		$caracs = $this->Article->findCaracsArticle($id);
		$this->render('article', array('article' => $article, 'caracs'=>$caracs,'image'=>$image));

	}

}	

?>