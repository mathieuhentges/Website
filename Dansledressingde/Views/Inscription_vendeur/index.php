<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="/Dansledressingde/Webroot/css/style.css" /> 
        <title><?php echo _("Inscription"); ?></title>
    </head>

    <body>
<p id="speech"><?php echo _("Pour pouvoir accéder à nos services et vendre vos articles, veuillez renseigner les champs suivants"); ?></p>
<p id="confirmation"><?php echo _("Un mail pour confirmer votre inscription vous sera envoyé"); ?></p>
        <form method="post" onsubmit="return sub();"  action= "<?php echo BASE_URL . '/Inscription_vendeur/valid' ?>">

            <div class="tout">

                <td class="td"><div class="champs">
                        <table class="tablechamps">
                            <tr class="premier">
                                <td><?php echo _("Marque"); ?></td>
                                <td><input type="text" name="marque" onblur="Marque();" id="marque" required>
                                    <span id="Marque"> </span> </td>
                            </tr>

                            <tr class="premier">
                                <td><?php echo _("Nom du dirigeant"); ?></td>
                                <td><input type="text" id="nom" onblur="Nom();" name="nom"></td>
                                <span id="Nom"> </span> </td>
                            </tr>

                            
                        </table>
                    </div></td>
                    
                    <p><?php echo _("Coordonnées du siège social"); ?></p>
                    
                    <td class="td"><div class="champs">
                        <table class="tablechamps">
                            <tr class="premier">
                                <td><?php echo _("Adresse"); ?></td>
                                <td><input type="textarea" id="adresse" onblur="Adresse();"name="adresse_ent" required>
                                 <span id="Adresse"> </span> </td>
                            </tr>
                            
                            <tr class="premier">
                                <td><?php echo _("Code postal"); ?></td>
                                <td><input type="text" id="codePostal" onblur="CP();" name="code_postal">
                                 <span id="CP"> </span> </td>
                            </tr>

                            <tr class="premier">
                                <td><?php echo _("Ville"); ?></td>
                                <td><input type="text" id="ville" onblur="Ville();" name="ville">
                                     <span id="Ville"> </span> </td>
                            </tr>

                            <tr class="premier">
                                <td><?php echo _("Téléphone"); ?></td>
                                <td><input type="text" id="telephone" onblur="Telephone();" name="tel">
                                 <span id="Telephone"> </span> </td>
                            </tr>
                            
                            <tr class="premier">
                                <td><?php echo _("Mail"); ?></td>
                                <td><input type="mail" id="email" onblur="M();" name="mail">
                                 <span id="m"> </span> </td></td>
                            </tr>
                            
                            <tr class="premier">
                                <td><?php echo _("Confirmez votre mail"); ?></td>
                                <td><input type="mail" id="remail" onblur="RM();" name="mail">
                                     <span id="rm"> </span> </td>
                            </tr>
                        </table>
                    </div></td>
                    
                    <p><?php echo _("Connexion"); ?></p>
                    
                    <td class="td"><div class="champs">
                        <table class="tablechamps">
                            <tr class="premier">
                                <td><?php echo _("Pseudo"); ?></td>
                                <td><input type="text" id="pseudo" name="pseudo"></td>
                            </tr>
                            
                            <tr class="premier">
                                <td><?php echo _("Mot de passe"); ?></td>
                                <td><input type="password" id='mdp' onblur="MD();"name="mdp">
                                     <span id="md"> </span> </td>
                            </tr>

                            <tr class="premier">
                                <td><?php echo _("Confirmer votre mot de passe"); ?></td>
                                <td><input type="password" id="rmpd" onblur="RMD();"name="mdp">
                                     <span id="rmd"> </span> </td>
                            </tr>
                        </table>
                    </div></td>
 
                        <p> <input type="reset" class="envoyer" name="annuler">   <input type="submit" class="envoyer" name="envoyer">
                        </p>
                    </div>

                </form>
            <script src="webroot/js/Inscription.js"></script>
                </body>
