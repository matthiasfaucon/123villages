<?php

    include 'verif_script.php';
    /*if($_SESSION['verif'] == 0 || $_SESSION['pass'] == "Membre"){
        header('Location:../index.php');
    }*/
    $_SESSION['valide_photoverif'] = '';

    try
    {
        $bdd=new PDO('mysql:host=localhost;dbname=ptut','root','');
    }
    catch(Exception $e)
    {
        die('Erreur :'.$e->getMessage());
        $_SESSION['valide_photoverif'] = 0;
        header('Location: verifphoto.php');
    }

    foreach($_GET['image'] as $image){

        $reponse=$bdd->prepare('UPDATE pictures SET validation = "1" WHERE nom = ?');
        $reponse->execute(array($image));

    }

    $reponse->closeCursor();

    $_SESSION['valide_photoverif'] = 1;
    header('Location: verifphoto.php');
?>