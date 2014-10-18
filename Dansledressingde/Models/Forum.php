<?php 
 class Forum extends Model {

 	function afficherForum(){
                   
      $sql= "SELECT * FROM forum_liste ORDER BY forum_id DESC";
        $pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre;

 	}
    function afficherTopic(){
        $forum =(int) $_GET['f'];           
      $sql= "SELECT topic_titre ,topic_id , topic_createur ,topic_time ,topic_description,topic_last_post 
			 FROM forum_topic
              WHERE forum_id='$forum' ORDER BY topic_last_post DESC";
        $pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre;


   }


     function afficherPost(){
        $forum =(int) $_GET['t'];           
      $sql= "SELECT post_contenu ,post_id , post_createur ,post_time 
			 FROM forum_post WHERE topic_id='$forum'ORDER BY post_time DESC";
      
        $pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre;


   }

   function creerTopic(){
	$titre=$_POST["titre"];
	$description=$_POST["contenu"];
	$createur=$_SESSION["User"]->pseudo;
	$time=date("Y-m-d   H:i:s");
	$forum = (int) $_GET['f'];

     $sql= "INSERT INTO forum_topic(forum_id, topic_titre, topic_createur, topic_time, topic_last_post, topic_description)
	                    VALUES ('$forum', '$titre', '$createur', '$time', '$time', '$description')";
      
      $pre = $this->db->exec($sql);
        return $pre;
   }


   function creerPost(){
	$description=$_POST["contenu"];
	$createur=$_SESSION["User"]->pseudo;;
	$time=date("Y-m-d   H:i:s");
	$topic = (int) $_GET['t'];	

     $sql= "INSERT INTO forum_post(post_createur, post_time, topic_id, post_contenu)
	                    VALUES ('$createur', '$time', '$topic', '$description')";

  
     $pre = $this->db->exec($sql);
        return $pre;
   }

 function updatePost(){
	
	$time=date("Y-m-d   H:i:s");
	$topic = (int) $_GET['t'];	

     $sql= "UPDATE forum_topic SET topic_last_post='$time' WHERE topic_id='$topic'";

  
     $pre = $this->db->exec($sql);
        return $pre;
   }

  function creerForum(){
  
  $titre=$_POST["titre"];
  $a=$_POST["contenu"];
  echo $a;

     $sql= "INSERT INTO forum_liste(forum_name,forum_description)
                      VALUES ('$titre','$a')";

  
     $pre = $this->db->exec($sql);
        return $pre;
   }

    function supForum(){
  
   $forum =(int) $_GET['f'];    
  
  $sql="DELETE FROM forum_liste WHERE forum_id='$forum'";
  $pre = $this->db->exec($sql);
        return $pre;
  }
  
   function supTopic(){
  
   $topic =(int) $_GET['t'];    
  
  $sql="DELETE FROM forum_topic WHERE topic_id='$topic'";
  $pre = $this->db->exec($sql);
        return $pre;
  }

   function supPost(){
  
   $post =(int) $_GET['p'];    
  
  $sql="DELETE FROM forum_Post WHERE post_id='$post'";
  $pre = $this->db->exec($sql);
        return $pre;
  }
  
  function postPurge(){

  $timep=date("Y-m-d   H:i:s",mktime(date("H"),date("i"),date("s"), date("m")-6, date("d") , date ("Y")));
  
  $sql="DELETE FROM forum_Post WHERE post_time<='$timep'";
  $pre = $this->db->exec($sql);
        return $pre;
  }

  function topicPurge(){
  $timep=date("Y-m-d   H:i:s",mktime(date("H"),date("i"),date("s"), date("m")-6, date("d") , date ("Y")));
  $timet=date("Y-m-d   H:i:s",mktime(date("H"),date("i"),date("s"), date("m"), date("d") , date ("Y")-1));
 
  $sql="DELETE FROM forum_topic WHERE topic_time<='$timet' AND topic_last_post<='timep'";
  $pre = $this->db->exec($sql);
        return $pre;
  }


}



 	?>