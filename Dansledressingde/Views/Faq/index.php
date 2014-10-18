<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="/Dansledressingde/Webroot/css/faq.css" /> 
        <title> <?php echo _("FAQ"); ?> </title>
        </head>
   
   <body>
   	<h1><?php echo _("FAQ"); ?></h1>
   	
<?php foreach ($contenu as $content) :?>
<dl>
	<dt><?php echo($content->question);?></dt>
	<dd><?php echo($content->reponse);?></dd>
</br>


<?php endforeach; ?>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript">
// Execution de cette fonction lorsque le DOM sera entièrement chargé
$(document).ready(function() {
  // Actions à définir
});
</script>
<script type="text/javascript">
// Execution de cette fonction lorsque le DOM sera entièrement chargé
$(document).ready(function() {
  // Masquage des réponses
  $("dd").hide();
});
</script>
<script type="text/javascript">
// Execution de cette fonction lorsque le DOM sera entièrement chargé
$(document).ready(function() {
  // Masquage des réponses
  $("dd").hide();
  // CSS : curseur pointeur
  $("dt").css("cursor", "pointer");
});
</script>
<script type="text/javascript">
// Execution de cette fonction lorsque le DOM sera entièrement chargé
$(document).ready(function() {
  // Masquage des réponses
  $("dd").hide();
  // CSS : curseur pointeur
  $("dt").css("cursor", "pointer");
  // Clic sur la question
  $("dt").click(function() {
    // Affichage de la réponse placée juste après dans le code HTML
    $(this).next().show();
  });
});
</script>
<script type="text/javascript">
// Execution de cette fonction lorsque le DOM sera entièrement chargé
$(document).ready(function() {
  // Masquage des réponses
  $("dd").hide();
  // CSS : curseur pointeur
  $("dt").css("cursor", "pointer");
  // Clic sur la question
  $("dt").click(function() {
    // Masquage des réponses
    $("dd").slideUp();
    // Affichage de la réponse placée juste après dans le code HTML
    $(this).next().slideDown();
  });
});
</script>
<script type="text/javascript">
// Execution de cette fonction lorsque le DOM sera entièrement chargé
$(document).ready(function() {
  // Masquage des réponses
  $("dd").hide();
  // CSS : curseur pointeur
  $("dt").css("cursor", "pointer");
  // Clic sur la question
  $("dt").click(function() {
    // Actions uniquement si la réponse n'est pas déjà visible
    if($(this).next().is(":visible") == false) {
      // Masquage des réponses
      $("dd").slideUp();
      // Affichage de la réponse placée juste après dans le code HTML
      $(this).next().slideDown();
    }
  });
});
</script>