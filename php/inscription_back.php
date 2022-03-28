<?php

    session_start();

    $_SESSION['email_exist'] = 0;
    $_SESSION['no_email'] == 0;

    $prenom = ucwords(strtolower(htmlentities($_GET['prenom'], ENT_QUOTES)));
    $nom = ucwords(strtolower(htmlentities($_GET['nom'], ENT_QUOTES)));
    $mdp = password_hash($_GET['mdp'], PASSWORD_DEFAULT);
    $email = strtolower(htmlentities($_GET['email'], ENT_QUOTES));

    if(filter_var($_GET['email'] , FILTER_VALIDATE_EMAIL)){
    }else{
        $_SESSION['no_email'] = 1;
        header('Location: front_create_account.php');
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
            $_SESSION['email_exist'] = 1;
        }

    }

    $reponse->closeCursor();

    if($_SESSION['email_exist'] == 0){
        $reponse=$bdd->prepare('INSERT INTO users (id, Prenom, Nom, Detail, Mail, Lien, License, Pass, Pass2) VALUES (NULL, :prenom, :nom, NULL, :email, NULL, NULL, :mdp, NULL)');
        $reponse->execute(array(':prenom'=>$prenom,':nom'=>$nom,':mdp'=>$mdp,':email'=>$email));

        $reponse->closeCursor();

        header('Location: front_connexion.php');
    }else{
        header('Location: front_create_account.php');
    }

?>