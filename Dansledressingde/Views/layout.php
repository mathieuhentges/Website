<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/Dansledressingde/Webroot/css/style.css" type='text/css'/>
    <?php 
    if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = "fr_FR";
    }
    $_SESSION['url'] = $_SERVER['REQUEST_URI'];
    ?>
</head>
    
<body>

	<header class="header">
        <div class="tete">
        	<a href = "/Dansledressingde/accueil"><span class="nomsite"><big>D</big>ans le dressing de <?php echo $_SESSION['User']->pseudo; ?></span></a>
        		<form method="POST" action="<?php echo BASE_URL . '/langage/english/' ?>" >
                    <span class="drapeauen"><input type="image" src="/Dansledressingde/webroot/img/en.png" width="90" alt="ok" /> </span>
                </form>
                <form action="<?php echo BASE_URL . '/langage/francais/'?>">
                    <span class="drapeaufr"><input type="image" src="/Dansledressingde/webroot/img/fr.png" width="90"alt="fr"/></span>
                </form>
                <span class="slogan"><small><?php echo _("Le site qui envahit votre armoire"); ?></small></span>
    </header>	

    <nav>
        <ul class="menu">
            <li><a href="/Dansledressingde/accueil"><span><?php echo _("Accueil"); ?></span></a></li>
            <li><a href="/Dansledressingde/profil"><span><?php echo _("Profil"); ?></span></a></li>
            <li><a href="/Dansledressingde/panier"><span><?php echo _("Dressing"); ?></span></a></li>
            <li><a href="/Dansledressingde/commande"><span><?php echo _("Mes commandes"); ?></span></a></li>
            <li><a href="/Dansledressingde/Forum"><span><?php echo _("Forum"); ?></span></a></li>
            <li><a href="/Dansledressingde/deconnexion"><span><?php echo _("Se Déconnecter"); ?></span></a></li>
        </ul>
    </nav>

    <?php echo $display_layout_content ?>
        
 	<footer>
            <table class="titre">
                <tr>
                    <td><?php echo _("Commande"); ?></td>
                    <td><a href="/Dansledressingde/faq"><span><?php echo _("F.A.Q."); ?></span></a></td>
                    <td><?php echo _("Contacts"); ?></td>
                    <td><a href="/Dansledressingde/charte_utilisation"><?php echo _("Charte d'utilisation"); ?> </a></td>
                </tr>
            </table>

            <table class="liens">
                <tr>
                    <td><a href="#"><span><?php echo _("Suivi"); ?></span></a></td>
                    <td></td>
                    <td><a href="/Dansledressingde/quisommesnous"><span><?php echo _("Admins"); ?></span></a></td>
                    <td> </td>
                </tr>

                <tr>
                    <td><a href="#"><span><?php echo _("Retour et Echanges"); ?></span></a></td>
                    <td></td>
                    <td><a href="#"><span><?php echo _("Facebook"); ?></span></a></td>
                    <td> </td>   
                </tr>

                <tr>
                    <td><a href="#"><span><?php echo _("Modalites"); ?></span></a></td>
                    <td>   </td>
                    <td><a href="#"><span><?php echo _("Twitter"); ?></span></a></td>
                    <td> </td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td> </td>

                </tr>

            </table>
        </footer>

    </body>
</html>