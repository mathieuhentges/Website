<?php

class FAQController extends Controller {


	function index() {
		$this->loadModel('Faq');
		$contenu = $this->Faq->Recupinfos();
		$this->render('index',array('contenu'=>$contenu));


	}

}
