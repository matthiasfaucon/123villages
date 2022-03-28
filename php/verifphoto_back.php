<?php

    include 'verif_script.php';
    /*if($_SESSION['verif'] == 0 || $_SESSION['pass'] == "Membre"){
        header('Location:../index.php');
    }*/

    try
    {
        $bdd=new PDO('mysql:host=localhost;dbname=ptut','root','');
    }
    catch(Exception $e)
    {
        die('Erreur :'.$e->getMessage());
    }

    foreach($_GET['image'] as $image){

        $reponse=$bdd->prepare('UPDATE pictures SET validation = "1" WHERE nom = ?');
        $reponse->execute(array($image));

    }

    $reponse->closeCursor();

    header('Location: verifphoto.php');


?>