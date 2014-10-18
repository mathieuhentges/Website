<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="/Dansledressingde/Webroot/css/ajouterunproduit.css" /> 
                <title> Ajouter un nouveau produit </title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <script> 
        var supprimerArticle = function(element){
                var r = confirm("Voulez-vous vraiment supprimer cet élément ?");
                var article = "article=" + element;
                if(r == true){
                        $.ajax({
                            type: "GET",
                            data: article,
                            url: "<?php echo BASE_URL ?>/ajouterArticle/deleteArticle",
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
 <p><h2> Ajout d'un nouveau produit pour la vente [<?php echo $vente->nom_vente ?>]</h2></p>	
	
    <?php include ROOT.DS.'Views/Common/menu_vendeur.php'; ?>
    <span class="info">(*) si la categorie ou sous-categorie que vous souhaitez n'est pas dans la liste, merci de contacter un administrateur</span>

<div class="milieu">
   
        <p class="ajoutarticle">Articles déjà présent dans la vente:</p>

            <table class="photovente">
                <form method="post" onsubmit="return verif();" action= "<?php echo BASE_URL . '/Creer_une_vente/photoVente/'. $vente->id_vente ?>" enctype="multipart/form-data">
                <tr>
                    <td>Photo de la vente: <input type="file" id="monInputFile" name="vente" required/> <input type="submit" value="Valider"></td>
                    <td><img src="../../webroot/img/Articles/<?php echo $photo->vente_url ?>" id="imagevente"></td>
                </tr>
                </form>
            </table>
            

            <table class="photocarroussel">
                <form method="post" action= "<?php echo BASE_URL . '/Creer_une_vente/photoCarroussel/'. $vente->id_vente ?>" enctype="multipart/form-data">
                <tr>
                    <td>Photo du carroussel: <input type="file" id="monInputFile" name="carroussel" required/> <input type="submit" value="Valider"></td>
                    <td><img src="../../webroot/img/Articles/<?php echo $photo->carroussel_url ?>" id="imagevente"></td>
                </tr>
                </form>
            </table>

            <table class="newarticle" border="1">
                <tr>
                    <td>Nom de l'article</td>
                </tr>
                   <?php for ($i=0; $i < sizeof($articleactuel) ; $i++) :?>
                        <tr>
                            <td><?php echo $articleactuel[$i]->nom_article ?></td>
                            <td><img src="../../webroot/img/Articles/<?php echo $articleactuel[$i]->article_url ?>" id="imagevente"></td>
                            <td><a href="<?php echo BASE_URL.'/gererStock/index/'.$articleactuel[$i]->id_article ?>">Détails</a>
                                <input type="button" id="input-<?php echo $articleactuel[$i]->id_article ?>" value="supprimer" 
                                    onclick="supprimerArticle(<?php echo $articleactuel[$i]->id_article ?>)">
                            </td>

                        </tr>
                          
                    <?php endfor; ?>
            </table>

        <p class="ajoutarticle"> Ajouter nouvel article : </p>
    
 <form method="post" action= "<?php echo BASE_URL . '/AjouterArticle/newArticle/'.$vente->id_vente ?>">
            <table class="newarticle">


                <tr>
                    <td>Nom de l'article </td>
                </tr>
                <tr>
                    <td><input type="text" size="25" name="nom_article" id="nom" required></td>
                </tr>
                <tr>
                    <td>Description: <textarea id="description" name="description" id="prenom" rows="6" cols="45" required/></textarea></td>
                </tr>

                <tr>
                    <td>Choisissez la catégorie de l'articles<span class="info">*</span></td>
                    <td>Choisissez la sous catégorie de l'article<span class="info">*</span></td>
                </tr>
                <tr>
                    <td><select name="categorie">
                        <?php for ($i=0; $i <sizeof($categorie) ; $i++) { 
                            $nom_categorie = $categorie[$i]->nom_categorie;
                            $id_categorie = $categorie[$i]->id;
                            echo '<option value="'.$id_categorie.'">',$nom_categorie,'</option>';
                        } ?></select>
                    </td>
                    <td><select name="souscategorie">
                        <?php for ($i=0; $i <sizeof($sscategorie) ; $i++) { 
                            $nom_souscategorie = $sscategorie[$i]->nom_souscategorie;
                            $id_souscategorie = $sscategorie[$i]->id;
                            echo '<option value="'.$id_souscategorie.'">',$nom_souscategorie,'</option>';
                        } ?></select>
                    </td>
                </tr>

            </table>



 
 

            <div class="prix">
            <p class="titreprix">Prix</p>
            <table class="prix">
                <tr>
                    <td>initial</td>
                    <td>reduction</td>
                    <td>final</td>
                </tr>
                <tr>
                    <td><input size="10" type="text" onblur="PrixI();"name="prixinitial" id="prixini" required/>€ 
                     <span  id="PrixI"> </span></td>
                    <td><input type="text" size="15" name="pourcentage" id="pourcentage" required>%</td>
                    <td><input type="text" size="10" name="prixfinal" id="prixfin" required/>€</td>
                </tr>
            </table>
            </div>

            <input type="submit" class="envoyer" name="valider" value="Valider et gérer le stock">
            <input type="button" class="envoyer" name="valider" value="Terminer la vente" onclick ="document.location.href='/../Dansledressingde/MesVentes'">
    </form>
</div>

<?php /*<script src="ajoutarticle.js"></script>*/?>
</body>


</html>