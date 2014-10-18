<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="/Dansledressingde/Webroot/css/formulaire.css" />
        <title><?php echo _("Ajouter un admin"); ?></title>
    </head>

    <body>
    
        <div class="contact">
            <img src="/Dansledressingde/Webroot/img/inscription.jpg" id="banniere" alt="Banniere"/>
        </div>

        <form method="post" action= "<?php echo BASE_URL . '/Ajouter_admin/valid' ?>">

            <div class="tout">

                <td class="td"><div class="champs">
                        <table class="tablechamps">
                            <tr class="premier">
                                <td><?php echo _("Nom"); ?></td>
                                <td><input type="text" name="nom" required></td>
                            </tr>

                            <tr class="premier">
                                <td><?php echo _("Prenom"); ?></td>
                                <td><input type="text" name="prenom" required></td>
                            </tr>

                            <tr class="premier">
                                <td><?php echo _("Mail"); ?></td>
                                <td><input type="mail" id="email" name="mail"></td>
                            </tr>

                            <tr class="premier">
                                <td><?php echo _("Confirmez votre e-mail"); ?></td>
                                <td><input type="mail" id="remail" name="mail"></td>
                            </tr>
                        </table>
                    </div></td>
     
                    <p id="parametres"><?php echo _("Definissez vos paramètres de connexion"); ?></p>
                <p><td> <div class="connexion">
                        <table class="tableconnexion">
                            <tr class="deux">
                                <td><?php echo _("Pseudo"); ?></td>
                                <td><input type="text" id="pseudo" name="pseudo" required></td>
                            </tr>

                            <tr class="deux">
                                <td><?php echo _("Mot de passe"); ?></td>
                                <td><input type="password" id= "mdp" name="mdp"></td>
                            </tr>

                            <tr class="deux">
                                <td><?php echo _("Confirmez votre mot de passe"); ?></td>
                                <td><input type="password"id="rmpd" name="mdp"></td>
                            </tr>
                        </table>

                    </div></td> </p>
            
           <p> <input type="reset" class="annuler" name="annuler">   
            <input type="submit" onclick="test();" class="envoyer" name="envoyer"></p>
        </form>
        
</div>

        <script src="webroot/js/Inscription.js"></script>
    </body>
