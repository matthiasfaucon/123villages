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

$reponse=$bdd->prepare('SELECT DISTINCT * from departement , code_postaux WHERE nom_depart=:nom_depart OR code_postal=:code_postal OR nom_ville=:nom_ville OR departement_ville=:depart');
$reponse->execute(array(':nom_depart'=>$recherche, ':code_postal'=>$recherche,':nom_ville'=>$recherche, ':depart'=>$recherche));

/*while ($donnees=$reponse->fetch())
{

    
    echo '<a href="php/departement.php?departement='.$donnees['nom_depart'].'&description='.$donnees['description_depart'].'">'.$donnees['nom_depart'].'/</a>';
    echo '<a href="php/ville.php?departement='.$donnees['departement_ville'].'&code_postal='.$donnees['code_postal'].'&ville='.$donnees['nom_ville'].'&presentation='.$donnees['presentation_ville'].'&histoire='.$donnees['histoire_ville'].'">/'.$donnees['code_postal'].'/'.$donnees['nom_ville'].'</a>';

}*/

$reponse=$bdd->prepare('SELECT * from code_postaux WHERE code_postal=:code_postal OR nom_ville=:nom OR departement_ville=:depart');
$reponse->execute(array(':code_postal'=>$recherche,':nom'=>$recherche, ':depart'=>$recherche));

while ($donnees=$reponse->fetch())
{

    echo '<a href="php/departement.php?departement='.$donnees['departement_ville'].'&descritpion='.$donnees['description_depart'].'&num='.$donnees['num_depart'].'">/'.$donnees['departement_ville'].'</a>';
    echo '<a href="php/ville.php?departement='.$donnees['departement_ville'].'&code_postal='.$donnees['code_postal'].'&num='.$donnees['num_depart'].'&ville='.$donnees['nom_ville'].'&presentation='.$donnees['presentation_ville'].'&histoire='.$donnees['histoire_ville'].'">/'.$donnees['code_postal'].'/'.$donnees['nom_ville'].'</a>';


}


?>