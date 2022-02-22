<?php
try
{
    $bdd=new PDO('mysql:host=localhost;dbname=ptut','root','');
}
catch(Exception $e)
{
    die('Erreur :'.$e->getMessage());
}

$reponse=$bdd->prepare('SELECT * from users WHERE Mail=?');
$reponse->execute(array($_POST['mail']));

while($donnees=$reponse->fetch()) {
    if($_POST['mail']==$donnees["Mail"]) {
        echo json_encode(["location"=>"../index.php"]);
        $_SESSION['email_verif'] = 1;
        $_SESSION['mdp_verif'] = 1;
    } 
}

$reponse->closeCursor();
?>