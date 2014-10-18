<?php
class ProfilController extends Controller {


    public function index() {


    }

       public function alert() {
    	$this->loadModel('User');
		$Alert =$this->User->alert();
        $this->render('index',array("Alert"=>$Alert));

    }

    public function mail() {
    	$this->loadModel('User');
    	$mail = $_POST['mailpar'];

    	if(isset($mail)){
    			$headers = 'Content-type: text/html; charset=UTF-8'."\r\n".'From: no-reply@Dansledressingde.fr'."\r\n";
    			$objet = '[Dans votre dressing] '.$_SESSION['User']->pseudo.' vous invite à rejoindre Dansledressingde™.';
				$message = $_SESSION['User']->pseudo.' vous a invité à le rejoindre dans son dressing !  Ne le faites pas attendre et profitez vous aussi de réductions exceptionnelles ! Rejoignez-nous sur localhost/Dansledressingde, et n\'oubliez pas d\'ajouter '.$_SESSION['User']->pseudo.' en tant que parrain !';

			 	{
					mail($mail, $objet, $message, $headers);	
					$statut_mail = "Envoyé";		
				} 





    	}
    	$this->render('index');


    }

 }