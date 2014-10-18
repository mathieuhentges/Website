<?php session_destroy(); ?>
<div id="espace"><h1><?php echo _("Espace Admin"); ?></h1></div>
            <form method="post" id="formulaire" action= "<?php echo BASE_URL.'/admin/admin' ?>">
                <div id="connexion">

                    <table>
                        <tr>
                            <td><label for="p"><?php echo _("Identifiant"); ?> </label></td>
                            <td><input type="text" name="pseudo" id="pseudo" size="30" maxlength="150"/></td>
                            <td><input type="submit" name="envoyer" class="envoyer" value="Se connecter"></td>
                        </tr>

                        <tr>
                            <td><label for="m"><?php echo _("Mot de passe"); ?> </label></td>
                            <td><input type="password" name="mdp" id="mdp" size="30" maxlength="150"/></td>
                            <td><div class="inscription"><p><a href="Ajouter_admin"><?php echo _("S'inscrire"); ?></a></p></div></td>
                        </tr>

                    </table>
                </div>