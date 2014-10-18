<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="/Dansledressingde/Webroot/css/login.css" />  
        <title><?php echo _("Accueil"); ?></title>
    </head>

    <body>
        

        <div id="membre">
            <div id="espace"><h1><?php echo _("Espace Membre"); ?></h1></div>
            <form method="post" id="formulaire" action= "<?php echo BASE_URL.'/login/user' ?>">
                <div id="connexion">

                    <table>
                        <tr>
                            <td><label for="p"><?php echo _("Identifiant"); ?> </label></td>
                            <td><input type="text" name="pseudo" id="pseudo" size="30" maxlength="150"/></td>
                            <td><input type="button" name="envoyer" onclick="test();" class="envoyer" value="Se connecter"></td>
                        </tr>

                        <tr>
                            <td><label for="m"><?php echo _("Mot de passe"); ?> </label></td>
                            <td><input type="password" name="mdp" id="mdp"  size="30" maxlength="150"/></td>
                            <td><div class="inscription"><p><a href="Inscription_client"><?php echo _("S'incrire"); ?></a></p></div></td>
                        </tr>

                    </table>
                </div>

            </form>
            <p></p>
        </div>
        <div id="container"> 
            <div class="photobanner">
                
                <?php for ($i=0; $i <sizeof($urls) ; $i++):?>
                <?php if($i=="0"){
                    echo( '<img class="first" src="/Dansledressingde/Webroot/img/Articles/'.$urls[$i]->carroussel_url.'" alt="">');
                } else{
                    echo('<img src="/Dansledressingde/webroot/img/Articles/'.$urls[$i]->carroussel_url.'" alt="">');
                } ?>
            <?php endfor;?>     
            </div>
        </div>
        <div class="redirection"><?php echo _("Pour les professionnels"); ?> : <a href="Logpro"><?php echo _("Connexion et Inscription"); ?></div>
    </body>

     <script src="webroot/js/Login.js"></script>


  
   
</html>



