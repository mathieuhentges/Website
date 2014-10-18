<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="/Dansledressingde/Webroot/css/loginpro.css" /> 
        <title><?php echo _("Accueil"); ?></title>
    </head>

    <body>
        
        <div class="resume">
            <p><?php echo _("Dans le dressing de... vous permet de vendre des produits déstockés par le biais de ventes de durée déterminée."); ?></p>
            <p><?php echo _("Le site offre un design clair qui permet, après inscription du membre, de lui permettre de visiter votre vente et d'acheter vos produits."); ?></p>
            <p><?php echo _("Les conditions de vente sont réglées par les administrateurs et dépendent du statut de votre entreprise."); ?></p>
        </div>


        <div id="espace"><h1><?php echo _("Accès à votre espace professionnel"); ?></h1></div>
        <p> </p>
        <form method="post" id="formulaire" action= "<?php echo BASE_URL.'/logpro/vendeur' ?>">
            <div id="connexion">

                <table>
                    <tr>
                        <td><label for="p"><?php echo _("Identifiant"); ?> </label></td>
                        <td><input type="text" name="pseudo" id="p" size="30" maxlength="150"/></td>

                    </tr>

                    <tr>
                        <td><label for="m"><?php echo _("Mot de passe"); ?> </label></td>
                        <td><input type="password" name="mdp" id="m" size="30" maxlength="150"/></td>

                    </tr>

                    <tr>
                       <br>

                        <td><div class="clic"><input type="submit" class="envoyer" name="connexion"></div></td>
                    </tr>

                </table>
            </div>

            <div class="inscription"><p><a href="Inscription_vendeur"><?php echo _("S'incrire"); ?></a></p></div>
        </form>
    </body>

</html>

