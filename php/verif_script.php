<?php

    session_start();

    if($_SESSION['email_verif'] == 0 || $_SESSION['mdp_verif'] == 0 || $_SESSION['email_verif'] == '' || $_SESSION['mdp_verif'] == ''){
        $_SESSION['verif'] = 0;
    }else{
        $_SESSION['verif'] = 1;
    }
    
?>