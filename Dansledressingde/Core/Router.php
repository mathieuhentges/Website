<?php
class Router {




	/**
	* Permet de parser les url
	* @param $url Url à parser
	**/
	static function parse($url, $request) {
		$url = trim($url, '/');
		$params = explode('/', $url);
		$request->controller = $params[0];
		$request->action = isset($params[1])? $params[1] : 'index';
		$request->params = array_slice($params,2);
		return true;
	}

	static function url($url){

		if(!isset($request)){$request = array();}
		$var = explode('/',$url);
		$controller = $var[0];
		$action= isset($var[1])? $var[1] : 'index';
		$vars = array_slice($var,2);
		return ($url);


	}

}

