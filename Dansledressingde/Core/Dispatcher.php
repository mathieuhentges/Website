<?php
// Permet d'appeler les bons fichiers en fonction de l'URL
class Dispatcher {

	var $request;

	function __construct() {
		$this->request = new Request();  
				if(!isset($this->request->url)){

			$this->request->url = "login";  // Permet d'afficher la page d'accueil par défaut, même si aucun élément n'a été ajouté ( complété dans Request.php )
		}
		Router::parse($this->request->url, $this->request);
		$controller = $this->loadController();
		if (!in_array($this->request->action, get_class_methods($controller))) {
			return $this->error('Le controller '.$this->request->controller.' n\'a pas de méthode '.
				$this->request->action.' !');
		}
		call_user_func_array(array($controller, $this->request->action), $this->request->params);
		$controller->render($this->request->action);
	}

	function error($message) { //Affichage de l'erreur 404
		header('HTTP/1.0 404 Not Found');
		$controller = new Controller($this->request);
		$controller->render('/Errors/404');
		die();
	}

	function loadController() { // Permet de charger automatiquement un controller en fonction du 1er nom dans le lien
		$name = ucfirst($this->request->controller).'Controller';
		$controllerFile = ROOT.DS.'Controllers'.DS.$name.'.php';
		require $controllerFile;
		return new $name($this->request);
	}

}