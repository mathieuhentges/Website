<?php 
header("Content-Type: text/plain");

$mdp=sha1($_GET["variable2"]);


try
{
    $bdd = new PDO('mysql:host=localhost;dbname=dansledressingde', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$con=$bdd->prepare('SELECT pseudo FROM user WHERE pseudo= :pseudo AND motdepasse= :mdp' );
$con->execute(array(
'pseudo'=>$_GET["variable1"],
 'mdp'=>$mdp   ));
 
 $resultat = $con->fetch();


if ($resultat)
{echo "Connecter";
    }
    else{echo 'pseudo ou mot de passe incorect' ;}


?>
