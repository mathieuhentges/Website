
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="/Dansledressingde/Webroot/css/forum.css" /> 
        <title><?php echo _("Forum"); ?></title>
        </head>
       


<TABLE BORDER WIDTH="100%"> 

<tr>
	<th><?php echo _("FORUM"); ?> </td>
	<th><?php echo _("DESCRIPTION"); ?> </td>
	
</tr>

 <?php
      
        while ($donnee=$ListeForum->fetch())
        { $d= $donnee['forum_id'];
         

            echo '<tr> 
            <td id="name"><a href="Forum/goForum?f='.$d.'">'.$donnee['forum_name'].'</a> </td>             
      
            <td class="DESCRIPTION">'.$donnee['forum_description'].' </td>';

            if(isset($_SESSION["Admin"]))
{
    echo'<td class="supprimer">

 <form method="post"  action="supForum?f='.$d.'">
 <input type="submit" value="suprimer" class="supprimer" name="supprimer">
 </form>
   </td>';
}


             }
        ?>
        </table>
         <?php

$ListeForum->CloseCursor();
?>

<?php
if(isset($_SESSION["Admin"]))
{
echo '<a href="forum/newForum">ajouter un nouveau forum</a> ';
}

?>


</TABLE>
