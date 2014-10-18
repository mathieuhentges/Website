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
		<div id="header">
		    <div class="tete">
		    	<?php echo($_SESSION['url']);?>
		    	<span class="nomsite"><big>D</big>ans le dressing de <?php echo $_SESSION['Pro']->pseudo; ?></span>
		    			<form method="POST" action="<?php echo BASE_URL . '/langage/english/' ?>" >
            		<span class="drapeauen"><input type="image" src="/Dansledressingde/webroot/img/en.png" width="90" alt="ok" /> </span>
                </form>
                <form action="<?php echo BASE_URL . '/langage/francais/'?>">
                    <span class="drapeaufr"><input type="image" src="/Dansledressingde/webroot/img/fr.png" width="90"alt="fr"/></span>
                </form>
                <span class="slogan"><small><?php echo _("Le site qui envahit votre armoire"); ?></small></span>

		    </div>
		    
		</div>

		<div id="nav">
		    <ul class="menu">
		        <li><a href="/Dansledressingde/accueil_pro"><span><?php echo _("Accueil"); ?></span></a></li>
		        <li><a href="/Dansledressingde/MesVentes"><span><?php echo _("Mes Ventes"); ?></span></a></li>
		        <li><a href=""><span><?php echo _(""); ?>Paramètres</span></a></li>
		        <li><a href="http://www.google.fr/"><span><?php echo _("Charte"); ?></span></a></li>
		        <li><a href="/Dansledressingde/Deconnexion"><span><?php echo _("Se deconnecter"); ?></span></a></li>
		    </ul>
		</div>
		
    <?php echo $display_layout_content ?>

    </body>
</html>