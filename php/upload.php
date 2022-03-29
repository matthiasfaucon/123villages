<?php

    include 'verif_script.php';
    
    if($_SESSION['verif'] == 0){
        header('Location:../index.php');
    }
    $_SESSION['valide_photo'] = '';

    $description = $_POST['name'];
    $adresse = $_POST['adress'];
    $lien = $_POST['link'];

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

        if(move_uploaded_file($nom_tmp,"../images/photos/".$nom_upload)) {

            echo "fichier bien transféré";

        } else {

            $_SESSION['valide_photo'] = 0;
            header('location:depotphoto.php');

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
        $_SESSION['valide_photo'] = 0;
        header('location:depotphoto.php');
    }

    $reponse=$bdd->prepare('INSERT INTO pictures (id, nom, description, adresse, lien, user, validation) VALUES (NULL, :nom, :descr, :adresse, :lien, :user, 0)');
    $reponse->execute(array(':nom'=>$nom_upload, ':descr'=>$description, ':adresse'=>$adresse, ':lien'=>$lien, ':user'=>$_SESSION['email']));

    $reponse->closeCursor();

    $_SESSION['valide_photo'] = 1;
    header('Location:depotphoto.php');

?>