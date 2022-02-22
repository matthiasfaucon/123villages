<?php

    session_start();

    if(!isset($_SESSION['email_exist'])){
        $_SESSION['email_exist'] = '';
    }

    if(!isset($_SESSION['no_email'])){
        $_SESSION['no_email'] = '';
    }

?>

<!DOCTYPE html>

<head>
    
    <title>Inscription</title>
    <meta charset="utf-8">
    <meta name="google-signin-client_id" content="718317717615-mr54b4299rq92c4c3oldcvth9e58amau.apps.googleusercontent.com">
    <link rel="stylesheet" href="../css/style.css">
<style>
.efface {
    display:none;
}
</style>
</head>

<body>

    <h1>Inscription</h1>

    <br><br>

    <form method="get" action="inscription_back.php">

        Entrez votre prenom : <br>
        <input type="text" name="prenom" required><br>

        <br>

        Entrez votre nom : <br>
        <input type="text" name="nom" required><br>

        <br>

        Entrez votre MdP : <br>
        <input type="text" name="mdp" required><br>

        <br>

        Entrez votre email : <br>
        <input type="text" name="email" required><br>

        <?php
            if($_SESSION['email_exist'] == 1){
                echo 'adresse e-mail déjà existant <br>';
            }

            if($_SESSION['no_email'] == 1){
                echo 'Veuillez entrer une adresse email valide<br>';
            }
        ?>

        <br>
        <br>

        <input type="submit" value="continuer">

    </form>
    <br/>
    <div class="g-signin2" data-onsuccess="onSignIn"></div>
    <br/>
    <a href="connexion.php">Cliquer ici pour vous connectez</a>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script>
function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        $("input[name='email']").attr("value",profile.getEmail());
        $(".g-signin2").addClass("efface");
    }
</script>
</body>