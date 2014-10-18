<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/Dansledressingde/Webroot/css/style.css" type='text/css'/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
</head>
        <?php 
            if (!isset($_SESSION['lang'])) {
                $_SESSION['lang'] = "fr_FR";
            }
            $_SESSION['url'] = $_SERVER['REQUEST_URI'];
         ?>
<body>
		<div id="header">
            <div class="tete">
            	<span class="nomsite"><big>D</big>ans le dressing de... </span>
                <form method="POST" action="<?php echo BASE_URL . '/langage/english/' ?>" >
            		<span class="drapeauennoconnect"><input type="image" src="/Dansledressingde/webroot/img/en.png" width="90" alt="ok" /> </span>
                </form>
                <form action="<?php echo BASE_URL . '/langage/francais/'?>">
                    <span class="drapeaufrnoconnect"><input type="image" src="/Dansledressingde/webroot/img/fr.png" width="90"alt="fr"/></span>
                </form>
                <span class="slogan"><small><?php echo _("Le site qui envahit votre armoire"); ?></small></span>

        </div> 
        
    <?php echo $display_layout_content ?>

    </body>