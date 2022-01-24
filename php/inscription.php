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
    <link rel="stylesheet" href="style.css">

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

    <a href="connexion.php">Cliquer ici pour vous connectez</a>

</body>