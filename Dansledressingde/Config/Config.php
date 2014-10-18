<?php
// Permet de définir nos connexions à la base de donnée dans tous nos fichiers Models.
class Config {

	static $debug = 1;
	static $database = array(

	'default' => array(
		'host' 		=>	'localhost',
		'database'  =>	'dansledressingde',
		'login'		=>	'root',
		'password'	=>	'root',	
		), 

	); 

}
