<?php
class Controller {

	public $request;
	private $vars = array();
	public $layout = 'layout.php';
	private $rendered = false;
	public $language = "french";

	function __construct($request) {
		$this->request = $request;
	}

	public function render($view, $vars=null) {		// Permet l'affichage de la page en y entrant l'URL

		if ($this->rendered == true) {
			return false;
		}
		if(isset($vars)) {
			$this->vars = extract($vars);
		} 
		if (strpos($view, '/') === 0) {
			$view = ROOT.DS.'Views'.$view.'.php';
		}
		else {
			$view = ROOT.DS.'Views'.DS.ucfirst($this->request->controller).DS.$view.'.php';
		}
		ob_start();
		require $view;
		$display_layout_content = ob_get_clean();
		require ROOT.DS.'Views'.DS.$this->layout;
		$this->rendered = true;
	}

	public function loadModel($name) {			// Sert à charger le modèle associé au controlleur automatiquement

		$file = ROOT.DS.'Models'.DS.$name.'.php';
		require_once($file);
		if (!isset($this->$name)) {
			$this->$name = new $name(); 
		} 
	}
}