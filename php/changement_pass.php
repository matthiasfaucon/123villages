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
        $_SESSION['valide_changementpass'] = 0;
        header('Location: gestion_admin_depart.php');
    }

    foreach($_GET['email'] as $email){

        echo $email."/".$_GET['pass2'];

        $reponse=$bdd->prepare('UPDATE users SET Pass2 = :pass2 WHERE Mail = :email');
        $reponse->execute(array(":pass2"=>$_GET['pass2'], ":email"=>$email));

    }

    $reponse->closeCursor();

    $_SESSION['valide_changementpass'] = 1;
    header('Location: gestion_admin_depart.php');


?>