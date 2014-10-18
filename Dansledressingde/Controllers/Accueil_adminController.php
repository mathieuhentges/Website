<?php

class Accueil_adminController extends Controller {

	public $layout="layout_admin.php";

	function index() {
		if (isset($_SESSION['Admin'])) {
			$this -> render('index');
		}else{
			header('location: '.BASE_URL.'/admin');
		}
	}
}