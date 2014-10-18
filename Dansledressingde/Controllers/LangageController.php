<?php

class LangageController extends Controller {
	
	function francais() {
		$_SESSION['lang'] = "fr_FR";
		header('location: '.BASE_URL."/..".$_SESSION['url']);
	}

	function english() {
		$_SESSION['lang'] = "en_UK";
		header('location: '.BASE_URL."/..".$_SESSION['url']);
	}

}
