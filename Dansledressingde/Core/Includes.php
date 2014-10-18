<?php
//Présent au début de l'index, il permet le chargement de l'intégralité des éléments nécessaires (évite les "require") ailleurs
require ROOT.DS.'Config'.DS.'Config.php';
require ROOT.DS.'Webroot'.DS.'localization.php';
require 'Request.php';
require 'Router.php';
require 'Controller.php';
require 'Model.php';
require 'Dispatcher.php';


?>