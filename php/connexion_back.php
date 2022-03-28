<?php

    session_start();

    $mail = 0;
    $mp = 0;

    $_SESSION['email_verif'] = '';
    $_SESSION['mdp_verif'] = '';
    $_SESSION['email_exist'] = '';
    $_SESSION['no_email'] = '';

    $email = strtolower(htmlentities($_GET['email'], ENT_QUOTES));
    $mdp = htmlentities($_GET['password'], ENT_QUOTES);

    if(filter_var($_GET['email'] , FILTER_VALIDATE_EMAIL)){
    }
    else{
        echo "Le mail est incorect (retour sur l'index)";
        $_SESSION['no_email'] = 1;
        header('Location: front_connexion.php');
        exit;
    }

    try
    {
        $bdd=new PDO('mysql:host=localhost;dbname=ptut','root','');
    }
    catch(Exception $e)
    {
        die('Erreur :'.$e->getMessage());
    }

    $reponse=$bdd->prepare('SELECT * from users WHERE Mail=?');
    $reponse->execute(array($email));

    while ($donnees=$reponse->fetch())
    {

        if($donnees['Mail'] == $email){
            $mail = 1;
        }

        if($donnees['Pass'] == password_verify($mdp, $donnees['Pass'])){
            $mp = 1;
        }

        if($mp == 1 && $mail == 1){

            $_SESSION['nom'] = $donnees['Nom'];
            $_SESSION['prenom'] = $donnees['Prenom'];

        }

        /*if($donnees['Mail']==$_POST["mail"]) {
            $mail=1;
            $mp=1;
            echo json_encode(["location"=>"../index.php"]);
        }*/

    }

    $_SESSION['email_verif'] = $mail;
    $_SESSION['mdp_verif'] = $mp;

    $reponse->closeCursor();

    if($_SESSION['email_verif'] == 1 && $_SESSION['mdp_verif'] == 1){


        header('Location: ../index.php');

    }else{

        header('Location: front_connexion.php');
    }

?>