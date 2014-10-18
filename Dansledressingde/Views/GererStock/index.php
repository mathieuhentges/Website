<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="Webroot/css/ajouterunproduit.css" /> 
        <title> <?php echo _("Ajouter un nouveau produit"); ?> </title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script> 
        var supprimerElement = function(element){
                var r = confirm("Voulez-vous vraiment supprimer cet élément ?");
                var stock = "stock=" + element;
                if(r == true){
                        $.ajax({
                            type: "GET",
                            data: stock,
                            url: "<?php echo BASE_URL ?>/gererStock/deleteStock",
                            success: function(data, server_response) {
                                $('#input-'+element).parent().append('<p>Supprimé</p>');
                                $('#input-'+element).remove();
                            }
                        });
                }
        }

    </script>
        </head>
   
   <body>
 <td></td>
 <p><h2> <?php echo _("Gestion du stock de"); ?> [<?php echo $article->nom_article ?>]</h2></p>	
	
    <?php include ROOT.DS.'Views/Common/menu_vendeur.php'; ?>
    <span class="info">(*) <?php echo _("si la couleur ou la taille que vous souhaitez n'est pas dans la liste, merci de contacter un administrateur"); ?></span>
<div class="milieu">
    
<table class="photocarroussel">
                <form method="post" action= "<?php echo BASE_URL . '/gererStock/photoPrincipale/'. $article->id_article ?>" enctype="multipart/form-data">
                <tr>
                    <td><?php echo _("Photo principale de l'article"); ?>: <input type="file" id="monInputFile" name="vente" required/> <input type="submit" value="Valider"></td>
                    <td><img src="../../webroot/img/Articles/<?php echo $photo->article_url ?>" id="imagevente"></td>
                </tr>
                </form>
</table>

<p class="ajoutphoto"> <?php echo _("Ajouter nouvel article"); ?> : </p>
            <table class="photo">
                <tr>
                    <td><?php echo _("Les différentes photos"); ?>:</td>
                </tr>
                <tr>
                    <td><?php include ROOT.DS.'Views/Common/photogalerie.php' ?></td>
                </tr>
                <tr>
                    <td><?php echo _("Ajouter une photo de l'article"); ?></td>
                </tr>
                <tr>
                    <td><?php include ROOT.DS.'Views/Common/ajoutphotos.php' ?></td>
                </tr>
            </table>


    



    <form method="post" action= "<?php echo BASE_URL . '/GererStock/newStock/'. $article->id_article ?>">
        <p class="ajoutarticle"><?php echo _(""); ?><?php echo _("Article dejà ajouté"); ?>:</p>
            
            <table class="newarticle" border="1">
                <tr>
                    <td><?php echo _("Couleur"); ?></td>
                    <td><?php echo _("Taille"); ?></td>
                    <td><?php echo _("Quantité"); ?></td>
                </tr>
                   <?php for ($i=0; $i < sizeof($stockactuel) ; $i++): ?>
                        <tr>
                            <td><?php echo $stockactuel[$i]->nom_couleur ?></td>
                             <td><?php echo $stockactuel[$i]->nom_taille?></td>
                             <td><?php echo $stockactuel[$i]->nombre?></td>
                             <td><input type="button" id="input-<?php echo $stockactuel[$i]->id_stock ?>" value="supprimer" 
                                    onclick="supprimerElement(<?php echo $stockactuel[$i]->id_stock ?>)"></td>

                        </tr>
                          
                  <?php endfor ?> 
            </table>

        <p class="ajoutarticle"> <?php echo _("Article à ajouter"); ?> : </p>
        


            <table class="newarticle">
                <tr>
                    <td><?php echo _("Choisissez la couleur"); ?><span class="info">*</span></td>
                    <td><?php echo _("Choisissez la taille"); ?><span class="info">*</span></td>
                    <td><?php echo _("Choisissez la quantité"); ?></td>
                </tr>
                <tr>
                    <td><select name="couleur">
                        <?php for ($i=0; $i <sizeof($couleur) ; $i++) { 
                            $nom_couleur = $couleur[$i]->nom_couleur;
                            $id_couleur = $couleur[$i]->id;
                            echo '<option value="'.$id_couleur.'">',$nom_couleur,'</option>';
                        } ?></select>
                    </td>
                    <td><select name="taille">
                        <?php for ($i=0; $i <sizeof($taille) ; $i++) { 
                            $nom_taille = $taille[$i]->nom_taille;
                            $id_taille = $taille[$i]->id;
                            echo '<option value="'.$id_taille.'">',$nom_taille,'</option>';
                        } ?></select>
                    </td>
                    <td>
                        <input type="text" name="quantite" format="NNNNNNNN">
                    </td>
                </tr>

            </table>


            <input type="submit" class="envoyer" name="valider" value="valider et continuer le stock">
            <input type="button" class="envoyer" value="Retourner à l'ajout d'article" onclick ="document.location.href='/../Dansledressingde/ajouterArticle/index/<?php echo $vente->id_vente ?>'">
     </form> 
</div>
</body>
</html>