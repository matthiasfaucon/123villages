<?php

    include 'verif_script.php';

    $nom=$_FILES['image']['name'];
    $size=$_FILES['image']['size'];
    $type=$_FILES['image']['type'];
    $nom_tmp=$_FILES['image']['tmp_name'];

    echo '<br>'.$nom.'<br>'.$size.'<br>'.$type.'<br>'.$nom_tmp;

    switch($type) {

        case 'image/jpeg':
            $nom_upload="image".time().".jpg";
            break;

        case 'image/jpg':
            $nom_upload="image".time().".jpg";
            break;
        
        case 'image/png':
            $nom_upload="image".time().".jpg";
            break;
        
        default:
            $nom_upload="";
            break;

    }

    if($nom_upload<>"") {

        if(move_uploaded_file($nom_tmp,"image/".$nom_upload)) {

            echo "fichier bien transféré";

        } else {

            echo "erreur";

        }

    } else {

        echo "le type de fichier n'est pas valide";

    }

    try
    {
        $bdd=new PDO('mysql:host=localhost;dbname=ptut','root','');
        echo "Connection à la BDD réussi<br/>";     //a supprimer une fois le code fini
    }
    catch(Exception $e)
    {
        die('Erreur :'.$e->getMessage());
    }

    $reponse=$bdd->prepare('INSERT INTO pictures (id, nom) VALUES (NULL, ?)');
    $reponse->execute(array($nom_upload));

    $reponse->closeCursor();

    header('Location: ../index.php');

?>