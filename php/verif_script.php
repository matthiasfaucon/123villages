<?php

    session_start();

    if($_SESSION['email_verif'] == 0 || $_SESSION['mdp_verif'] == 0 || $_SESSION['email_verif'] == '' || $_SESSION['mdp_verif'] == ''){
        header('Location: php/connexion.php');
    }
    
?>