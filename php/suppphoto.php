<?php

    include 'verif_script.php';
    /*if($_SESSION['verif'] == 0 || $_SESSION['pass'] == "Membre"){
        header('Location:../index.php');
    }*/

?>

<html>

    <head>

        <meta charset="utf-8">

    </head>

    <body>

        <form method="get" enctype="multipart/form-data" action="suppphoto_back.php">

        <?php

            $n = 0;

            try
            {
                $bdd=new PDO('mysql:host=localhost;dbname=ptut','root','');
            }
            catch(Exception $e)
            {
                die('Erreur :'.$e->getMessage());
            }

            $reponse=$bdd->query('SELECT nom from pictures');

            while ($donnees=$reponse->fetch())
            {

                $n = $n+1;
                ?>



                <?php

                    echo "<img src='../images/photos/".$donnees['nom']."' alt='image' id='photo'>".$n."<br>";
                    echo $donnees['nom'];
                    echo "<input type='checkbox' name='image[]' value='".$donnees['nom']."'><br>";

                    ?>

                <?php



            }

            ?>

            <input type="submit" value="valider">

            </form>

    </body>