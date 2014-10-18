

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="/Dansledressingde/Webroot/css/forum.css" /> 
        <title><?php echo _("Forum"); ?>  </title>
        </head>
<?php $forum =(int) $_GET['f'];

?>
   
  <table BORDER WIDTH="100%">    
        <tr>
       
        <th class="titre"><strong><?php echo _("Titre"); ?>  </strong></th>             
        <th class="Date"><strong><?php echo _("Date"); ?>  </strong></th>
        <th class="auteur"><strong><?php echo _("Auteur"); ?>  </strong></th>                       
        <th class="Description"><strong><?php echo _("Description"); ?>  </strong></th>
        <th class="Dernier Post"><strong><?php echo _("Dernier Post(A/M/J H/M/S)"); ?>  </strong></th>
        </tr>  

 <?php
        //On commence la boucle
        while ($donnee=$ListeTopic->fetch())
        {
          

        	echo '<tr>
        	<td id="titre"><a href="goTopic?t='.$donnee['topic_id'].'">'.$donnee['topic_titre'].'</a> </td>             
      
      	  	<td class="Date">'.$donnee['topic_time'].' </td>
      
        	<td class="auteur">'.$donnee['topic_createur'].'</td>                       
      
        	<td class="Description">'.$donnee['topic_description'].' </td>

            <td class="Dernier post">'.$donnee['topic_last_post'].' </td>';


      if(isset($_SESSION["Admin"]))
{
    echo'<td class="supprimer">

 <form method="post"  action="supTopic?t='.$donnee['topic_id'].'">
 <input type="submit" value="suprimer" class="supprimer" name="supprimer">
 </form>
   </td>';
}
	echo'</tr>';
        }
        ?>
        </table>
    
         <?php

$ListeTopic->CloseCursor();
?>
    
</br>

<?php
echo '
<a href="newTopic?f='.$forum.'">Creer un nouveau topic </a>';
?>
