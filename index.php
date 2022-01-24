<?php

    include 'php/verif_script.php';

?>

<html>

    <head>

        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">

    </head>

    <body>

        <form method="post" enctype="multipart/form-data" action="php/upload.php">

            <input type="file" name="image" accept="image/png, image/jpeg">
            <input type="submit" value="Envoyer !">

        </form>

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
                
                echo "<img src='php/image/".$donnees['nom']."' alt='image' id='photo_cool'><br>";
                ?>

                <form method="post" enctype="multipart/form-data" action="php/supp.php">

                    <input type="submit" value="Supprimer">

                </form>

                <?php

                echo $n;

            }

        ?>

        <a href="php/deconexion_back.php">Deconexion</a>

    </body>

    <!-- DEBUT - FaceBook Login API -->

    <script>

        window.fbAsyncInit = function() {

            FB.init({

                appId      : '692040328819024',
                cookie     : true,
                xfbml      : true,
                version    : 'v12.0'

            });
      
            FB.AppEvents.logPageView();   
      
        };

        (function(d, s, id){

            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);

        }
        
        (document, 'script', 'facebook-jssdk'));
    
    </script>

    <!-- FIN - FaceBook Login API -->

</html>