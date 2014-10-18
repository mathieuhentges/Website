<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="formulaire.css" /> 
        <title> Dans le dressing de  </title>
        

        </head>

        

        <h1> Modifier mon profil </h1>
    <br>
	<?php /*<form NAME="titre" action="infosclient.php" id='formulaire' method="post"> */ ?>
	Nom <input type="text" id="nom" name="nom" onblur="Nom();" value="<?php echo($_SESSION['User']->nom);?>"/required > <span id="Nom"></span> </br>
	Prenom <input type="text" id="prenom" name="prenom" onblur="Prenom();" value="<?php echo($_SESSION['User']->prenom);?>"/required> <span id="Prenom"></span> </br>
	Ville <input type="text" id="ville" name="ville" onblur="Ville();" value="<?php echo($_SESSION['User']->ville);?>" /required> <span id="Ville"></span> </br>
	Adresse <input type="text" id="adresse" name="adresse" onblur="Adresse()"; value="<?php echo($_SESSION['User']->adresse);?>"/required> <span id="Adresse"></span> </br>
	Code Postal <input type="text" id="codePostal" name="codePostal" onblur="CP();" value="<?php echo($_SESSION['User']->codepostal);?>"/required> <span id="CP"></span> </br>
	Pseudo	<input type="text" id="pseudo" name="pseudo" onchange="test();" value="<?php echo($_SESSION['User']->pseudo);?>" /required> </br>
	Téléphone <input type="text" id="telephone" name="tel" onblur="Telephone();" value="<?php echo($_SESSION['User']->telephone);?>" /required> <span id="Telephone"></span> </br>
	Mail <input type="text" id="email" name="mail" onblur="M();" value="<?php echo($_SESSION['User']->mail);?>" /required> <span id="m"></span> </br>
        
	<input type="button" onclick="change();"  VALUE="Modifier" class="enregistrer" name="enregistrer">
      
<br>
<br>

	<h1>Gestion de mes alertes</h1>

Voulez recevoir des alertes mail à chaque nouvelle vente ? 
<form method="post"  action="/Dansledressingde/profil/alert">

	<input type="radio" name="alert" value="oui" id="oui" /> <label for="oui">oui</label><br />
    <input type="radio" name="alert" value="non" id="non" /> <label for="non">non</label><br />
    
    <input type="submit"  value="confirmer" />
</form>

<br>
<br>
	<h1> Suggérez Dansledressingde™ à vos amis et devenez leur parrain ! </h1>
	<form method = "post" action ="/Dansledressingde/profil/mail">

		<input type="text" id="mailpar" name="mailpar" onblur="M();" value="email du fillieul" onclick="ER();" /required>
		<input type="submit" value="Envoyer !" />
	</form>
        
<script src="/Dansledressingde/Webroot/js/Inscription.js"></script>
<script src="/Dansledressingde/Webroot/js/modificationProfil.js"></script>




