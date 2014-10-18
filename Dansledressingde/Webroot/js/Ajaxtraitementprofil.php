<?php session_start();
header("Content-Type: text/plain");


try
{
    $bdd = new PDO('mysql:host=localhost;dbname=dansledressingde', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


$change = $bdd->prepare('UPDATE user SET pseudo = :pseudo,  nom = :nom,
                      prenom = :prenom, mail = :mail, adresse= :adresse, codepostal = :codepostal,
                     ville = :ville, telephone = :telephone WHERE pseudo = :pseud ');
$change->execute(array(
    'pseudo' =>$_GET["1"],
    'nom' => $_GET["2"],
    'prenom' => $_GET["3"],
    'mail' => $_GET["7"],
    'adresse' =>$_GET["8"],
    'codepostal' => $_GET["5"],
    'telephone' =>$_GET["6"],
    'ville' => $_GET["4"],
    'pseud'=>$_SESSION['User']->pseudo

    
    ));
    
echo "Changement effectué, les modifications seront visibles à la reconnexion";
    
  
    

     ?>