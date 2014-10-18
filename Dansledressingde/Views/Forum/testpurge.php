<?php 
$timep=date("Y-m-d   H:i:s",mktime(date("H"),date("i"),date("s"), date("m")-6, date("d") , date ("Y")));
$timet=date("Y-m-d   H:i:s",mktime(date("H"),date("i"),date("s"), date("m"), date("d") , date ("Y")-1));

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=dansledressingde', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


$bdd->exec("DELETE FROM Forum_Post WHERE post_time<='$timep'");
$bdd->exec("DELETE FROM Forum_topic WHERE topic_time<='$timet' AND topic_last_post<='timep'");


?>