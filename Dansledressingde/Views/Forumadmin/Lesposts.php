
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="/Dansledressingde/Webroot/css/forum.css" /> 
        <title><?php echo _("Forum"); ?> </title>
        </head>

 <?php $forum = (int) $_GET['t'];
   

        
?>

  <table BORDER WIDTH="100%">   
        <tr>
       
        <th class="Auteur"><strong><?php echo _("Auteur"); ?> </strong></th>             
        <th class="Contenu"><strong><?php echo _("Post"); ?> </strong></th>
        <th class="Time"><strong><?php echo _("Time"); ?> </strong></th>                       
        
        </tr>  


      <?php
        while ($donnee=$ListePost->fetch())
        {

        	echo '<tr>
        	<td class="createur">'.$donnee['post_createur'].' </td>             
      
      	  	<td class="contenu">'.$donnee['post_contenu'].' </td>
      
        	<td class="time">'.$donnee['post_time'].'</td> ';                      
      
   if(isset($_SESSION["Admin"]))
{
    echo'<td class="supprimer">

 <form method="post"  action="supPost?p='.$donnee['post_id'].'">
 <input type="submit" value="suprimer" class="supprimer" name="supprimer">
 </form>
   </td>';
}
	echo'</tr>';
        }
        ?>
        </table>
          <?php

$ListePost->CloseCursor();

echo '<form method="post"  action="newPost?t='.$forum.'">';
?>


<label for="contenu"><?php echo _("Commentaire"); ?></label>
<textarea  name="contenu" id="contenu" required></textarea>

<input type="submit"  value="envoyer" />
        

        </form>
