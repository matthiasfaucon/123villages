<?php

    session_start();

    if($_SESSION['email_verif'] == 0 || $_SESSION['mdp_verif'] == 0 || $_SESSION['email_verif'] == '' || $_SESSION['mdp_verif'] == ''){
        $_SESSION['verif'] = 0;
    }
    if($_SESSION['pass'] == "Membre" || $_SESSION['pass'] == "Admin" || $_SESSION['pass'] == "Admin depart"){
        $_SESSION['verif'] = 1;
    }
?>