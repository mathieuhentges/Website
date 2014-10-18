<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/Dansledressingde/Webroot/css/style.css" type='text/css'/>
    
</head>
    
<body>
		<div id="header">
            <div class="tete">
            	<span class="nomsite"><big>D</big>ans le dressing de...</span>
            		<img class="drapeauen" src="/Dansledressingde/webroot/img/en.png" alt="">
            		<img class="drapeaufr" src="/Dansledressingde/webroot/img/fr.png" alt="">
            	<span class="slogan"><small><?php echo _("Le site qui envahit votre armoire"); ?></small></span>

        </div>

		<div id="nav">
		    <ul class="menu">
		        <li><a href="/Dansledressingde/accueil_admin"><span><?php echo _("Accueil"); ?></span></a></li>
		        <li><a href="/Dansledressingde/gestion_des_comptes"><span><?php echo _("Gestion des comptes"); ?></span></a></li>
		        <li><a href="/Dansledressingde/parametres_admin"><span><?php echo _("Paramètres"); ?></span></a></li>
		        <li><a href="/Dansledressingde/forumadmin"><span><?php echo _("Forum"); ?></span></a></li>
		        <li><a href="/Dansledressingde/gestion_des_commandes"><span><?php echo _("Gestion des commandes"); ?></span></a></li>
		        <li><a href="/Dansledressingde/admin"><span><?php echo _("Se deconnecter"); ?></span></a></li>
		    </ul>
		</div>
		
    <?php echo $display_layout_content ?>

    </body>
</html>