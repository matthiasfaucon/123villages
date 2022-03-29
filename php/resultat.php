<?php
header("Content-Type:text/plain");

$recherche=$_GET['recherche'];

try
{
    $bdd=new PDO('mysql:host=localhost;dbname=ptut','root','');
}
catch(Exception $e)
{
    die('Erreur :'.$e->getMessage());
}

$reponse=$bdd->prepare('SELECT * from code_postaux WHERE code_postal=:code_postal OR nom_ville=:nom OR departement=:depart');
$reponse->execute(array(':code_postal'=>$recherche,':nom'=>$recherche, ':depart'=>$recherche));

while ($donnees=$reponse->fetch())
{

    echo '<a href="php/ville.php?departement='.$donnees['departement'].'&code_postal='.$donnees['code_postal'].'&ville='.$donnees['nom_ville'].'&presentation='.$donnees['presentation'].'&histoire='.$donnees['histoire'].'">'.$donnees['departement'].'/'.$donnees['code_postal'].'/'.$donnees['nom_ville'].'</a>';


}
?>