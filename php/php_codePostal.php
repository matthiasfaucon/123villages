<?php

    try{
        $bdd=new PDO('mysql:host=localhost;dbname=ptut','root','');
    }
    catch(Exception $e){
        die('Erreur :'.$e->getMessage());
    }

    $reponse=$bdd->query('SELECT code_postal, nom_ville FROM code_postaux');

    while ($donnees=$reponse->fetch()){
    
      $codePostal = $donnees['code_postal'];
      $ville = $donnees['nom_ville'];

      $text = $donnees['nom_ville'];
      echo $text;

    }
    
    $reponse->closeCursor();

?>