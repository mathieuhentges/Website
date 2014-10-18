<!DOCTYPE html>
<html>
    <head>
        <title><?php echo _("Photo Gallerie"); ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="/dansledressingde/webroot/css/photogallery.css" />
        <script type="text/javascript" src="/Dansledressingde/webroot/js/photogallery.js"></script>
        <script>
        	var supprimerPhoto = function(element){
                var r = confirm("Voulez-vous vraiment supprimer cette photo ?");
                var photo = "photo=" + element;
                if(r == true){
                        $.ajax({
                            type: "GET",
                            data: photo,
                            url: "<?php echo BASE_URL ?>/GererStock/deletePhoto",
                            success: function(data, server_response) {
                                $('#input-'+element).parent().append('<p>Supprimé</p>');
                                $('#input-'+element).remove();
                            }
                        });
                }
        }
        </script>
    </head>
    <body> 
    	<div id="galerie">
    		<ul id="galerie_mini">
    			<?php for ($i=0; $i < sizeof($image) ; $i++):?>
    			<li>
    				<a href="../../webroot/img/Articles/<?php echo $image[$i]->image_url?>"</a>
    				<img src="../../webroot/img/Articles/<?php echo $image[$i]->image_url?>" id="little_pict">
    				<br>
    				<input type="button" id="input-<?php echo $image[$i]->id ?>" value="supprimer" 
                                    onclick="supprimerPhoto(<?php echo $image[$i]->id ?>)">
    			</li>
    			<?php endfor; ?>
    		</ul>
            <dl id="photo">
                <dt> </dt>
                <?php if(isset($image[0]->image_url)){
                    $link='../../webroot/img/Articles/'.$image[0]->image_url;    
                }else{
                    $link="";
                }?>
                <dd><img id="big_pict" src="<?php echo($link);?>" alt="Photo 1 en taille normale" /></dd>
            </dl>
        </div>
    </body>
</html>

