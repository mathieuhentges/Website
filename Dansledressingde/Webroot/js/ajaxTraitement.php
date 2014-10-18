<?php 
header("Content-Type: text/plain");

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=dansledressingde', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


$pseud=$bdd->prepare('SELECT pseudo FROM user WHERE pseudo= :pseudo');
$pseud->execute(array(
'pseudo'=>$_GET["variable1"]));

$resultat = $pseud->fetch();

if ($resultat)
{echo "pseudo deja utilisé";
    }
    else{echo "pseudo disponible";}
   
?>