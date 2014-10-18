<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="/Dansledressingde/Webroot/css/formulaire.css" />
        <title><?php echo _("Inscription"); ?></title>
    </head>

    <body>
    
        <div class="contact">
            <img src="/Dansledressingde/Webroot/img/inscription.jpg" id="banniere" alt="Banniere"/>
        </div>

         <form method="post"  onsubmit="return sub();" action= "<?php echo BASE_URL . '/Inscription_client/valid' ?>">

            <div class="tout">

                <td class="td"><div class="champs">
                        <table class="tablechamps">
                            <tr class="premier">
                                <td><?php echo _("Nom"); ?></td>
                                <td><input type="text" name="nom" id="nom" onblur="Nom();" required>
                                  <span  id="Nom"> </span>  </td>
                            </tr>

                            <tr class="premier">
                                <td><?php echo _("Prénom"); ?></td>
                                <td><input type="text" name="prenom" id="prenom" onblur="Prenom();"required>
                                 <span  id="Prenom"> </span>   </td>
                            </tr>

                            <tr class="premier">
                                <td><?php echo _("Adresse"); ?></td>
                                <td><input type="textarea" name="adresse_ent" id="adresse" onblur="Adresse();" required>
                                   <span  id="Adresse"> </span>   </td>
                            </tr>

                            <tr class="premier">
                                <td><?php echo _("Code Postal"); ?></td>
                                <td><input type="text" id="codePostal"  onblur="CP();" name="code_postal">
                                <span  id="CP"> </span>  </td>
                            </tr>

                            <tr class="premier">
                                <td><?php echo _("Ville"); ?></td>
                                <td><input type="text" id="ville" onblur="Ville();"; name="ville">
                                 <span  id="Ville"> </span>    </td>
                            </tr>

                            <tr class="premier">
                                <td><?php echo _("Téléphone"); ?></td>
                                <td><input type="tel" id="telephone" onblur="Telephone();" name="tel">
                                  <span  id="Telephone"> </span>    </td>
                            </tr>

                            <tr class="premier">
                                <td><?php echo _("Mail"); ?></td>
                                <td><input type="mail" id="email" onblur="M();" name="mail">
                                    <span id="m"> </span>  </td>
                            </tr>

                            <tr class="premier">
                                <td><?php echo _("Confirmez votre e-mail"); ?></td>
                                <td><input type="mail" id="remail" onblur="RM();" name="mail">
                                  <span id="rm"> </span>   </td>
                            </tr>
                        </table>
                    </div></td>
     
                    <p id="parametres"><?php echo _("Définissez vos paramètres de connexion"); ?></p>
                <p><td> <div class="connexion">
                        <table class="tableconnexion">
                            <tr class="deux">
                                <td><?php echo _("Pseudo"); ?></td>
                                <td><input type="text" id="pseudo" name="pseudo" required></td>
                            </tr>

                            <tr class="deux">
                                <td><?php echo _("Mot de passe"); ?></td>
                                <td><input type="password" id= "mdp" onblur="MD(); "name="mdp">
                                 <span id="md"> </span>      </td>
                            </tr>

                            <tr class="deux">
                                <td><?php echo _("Confirmez votre mot de passe"); ?></td>
                                <td><input type="password"id="rmpd" onblur="RMD();" name="mdp">
                                 <span id="rmd"> </span>     </td>
                            </tr>

                            <tr class="deux">
                                <td><?php echo _("Pseudo de votre parrain(facultatif)"); ?></td>
                                <td><input type="text" id="pn"  name="pn">
                                      </td>
                            </tr>
                        </table>

                    </div></td> </p>
            
           <p> <input type="reset" class="envoyer" name="annuler">   
            <input type="submit" onclick="test();" class="envoyer" name="envoyer"></p>
        </form>
        
</div>
    
        <script src="webroot/js/Inscription.js"></script>
    </body>
