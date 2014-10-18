<?php 

class ForumadminController extends Controller {

    public $layout="layout_admin.php";

      public function index() {
		$this->loadModel('Forum');
		$ListeForum = $this->Forum->afficherForum();
		$this->render('index',array("ListeForum"=>$ListeForum));
	}

      
      public function goForum(){
        $this->loadModel('Forum');
        $ListeTopic = $this->Forum->afficherTopic();
        $this->render('lesventes',array("ListeTopic"=>$ListeTopic));

     }

    public function goTopic(){
     	 $this->loadModel('Forum');
          $ListePost = $this->Forum->afficherPost();
    	 $this->render('Lesposts',array("ListePost"=>$ListePost));
     }	


     public function newTopic(){
     	 $this->loadModel('Forum');
    	 $this->render('nouveautopic');

     }	

      public function new_Topic(){
     	 $this->loadModel('Forum');
         $newtopic =$this->Forum->creerTopic();
    	 $this->render('nouveau_topic',array("creerTopic"=>$creerTopic));

     }	

      public function newPost(){
     	 $this->loadModel('Forum');
         $creerPost =$this->Forum->creerPost();
         $updatePost =$this->Forum->updatePost();
         $purgePost =$this->Forum->postPurge();
         $purgeTopic =$this->Forum->topicPurge();

    	 $this->render('nouveaupost',array("creerPost"=>$creerPost,"updatePost"=>$updatePost,"purgePost"=>$purgePost,"PurgeTopic"=>$purgeTopic));

     }	
    
      public function newForum(){
         $this->loadModel('Forum');
         $this->render('nouveauforum');

     }  

       public function new_Forum(){
         $this->loadModel('Forum');
         $creerForum =$this->Forum->creerForum();
         $this->render('nouveau_forum',array("creerForum"=>$creerForum));

     }  

      public function supForum(){
         $this->loadModel('Forum');
         $supForum =$this->Forum->supForum();
         $this->render('sup_forum',array("supForum"=>$supForum));

     }  

     public function supTopic(){
         $this->loadModel('Forum');
         $supForum =$this->Forum->supTopic();
         $this->render('sup_topic',array("supForum"=>$supForum));

     }  

      public function supPost(){
         $this->loadModel('Forum');
         $supPost =$this->Forum->supPost();
         $this->render('sup_Post',array("supPost"=>$supPost));

     }  
}
	
	?>