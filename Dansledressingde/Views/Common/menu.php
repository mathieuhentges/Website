	<head>	<link rel="stylesheet" href="/Dansledressingde/webroot/css/menu_deroulant.css">	
	<script type="text/javascript" src="/Dansledressingde/webroot/js/menu_deroulant.js"></script>

<script type="text/javascript">
$(document).ready( function () {
    // On cache les sous-menus :
    $(".navigation ul.subMenu").hide();
    // On sélectionne tous les items de liste portant la classe "toggleSubMenu"

    // et on remplace l'élément span qu'ils contiennent par un lien :
    $(".navigation li.toggleSubMenu span").each( function () {
        // On stocke le contenu du span :
        var TexteSpan = $(this).text();
        $(this).replaceWith('<a href="" title="Afficher le sous-menu">' + TexteSpan + '<\/a>') ;
    } ) ;

    // On modifie l'évènement "click" sur les liens dans les items de liste
    // qui portent la classe "toggleSubMenu" :
    $(".navigation li.toggleSubMenu > a").click( function () {
        // Si le sous-menu était déjà ouvert, on le referme :
        if ($(this).next("ul.subMenu:visible").length != 0) {
            $(this).next("ul.subMenu").slideUp("normal");
        }
        // Si le sous-menu est caché, on ferme les autres et on l'affiche :
        else {
            $(".navigation ul.subMenu").slideUp("normal");
            $(this).next("ul.subMenu").slideDown("normal");
        }
        // On empêche le navigateur de suivre le lien :
        return false;
    });    


} ) ;
</script>

</head>
<html>
    <head>
        <meta charset ="utf-8" />
        <link rel="stylesheet" href="menuderoulant.css" />
        <title>Menu déroulant</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
            <ul class="navigation">

                <?php for ($i=0; $i <sizeof($categories) ; $i++): ?>

                <li class="toggleSubMenu"><span><?php echo($categories[$i]->nom_categorie);?></span>
                    <ul class="subMenu">
                        <?php for ($j=0; $j <sizeof($souscategories[$i]) ; $j++):?>
                        <li><a href="/Dansledressingde/Recherche/parcategorie/<?php echo($categories[$i]->nom_categorie);?>/<?php echo($souscategories[$i][$j]->nom_souscategorie);?>"><?php echo($souscategories[$i][$j]->nom_souscategorie);?></a></li>
                    <?php endfor;?>
                    </ul>
                <?php endfor;?>
            </ul>

    </body>
</html>