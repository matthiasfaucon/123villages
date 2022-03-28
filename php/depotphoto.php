<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" type="image/x-icon" href="../images/favicon.svg">
  <title>depot_photo</title>

  <?php
    include('verif_script.php');
  ?>

</head>

<body> 
  <div class="pageAdmin">

<div id="togadmin"></div>
<div id="gestion_admin">

<?php

if($_SESSION['pass'] == "Membre" || $_SESSION['pass'] == "Admin depart" || $_SESSION['pass'] == "Admin"){

        ?>


<div id="membre">
    <p>Membre</p>

    
        <a href="depotphoto.php" class="menu__item_gestion_membre">Dépôt de photos</a></br>
        <a href="modification_text.php" class="menu__item_gestion_membre">Proposition modification d'informations</a></br>
        <a href="photovalide.php" class="menu__item_gestion_membre">Photos validées</a></br>
    
</div>

<?php 

    }else{
        header('location:front_connexion.php');
    }

    if($_SESSION['pass'] == "Admin" || $_SESSION['pass'] == "Admin depart"){

        ?>


 <div id="admin"> 
    <p>Admin département</p>


   
         <a href="verifphoto.php" class="menu__item_gestion_admin">Espace validation photos</a></br>
         <a href="suppphoto.php" class="menu__item_gestion_admin">Espace suppression photos</a></br>
         <span class="menu__item_gestion_admin">Espace validation texte</span></br>
         <span class="menu__item_gestion_admin">Espace création lieu</span> </br>
         <span class="menu__item_gestion_admin">Campagnes de mail</span></br>
         <span class="menu__item_gestion_admin">mise à jour SiteMap</span></br>
         <span class="menu__item_gestion_admin">Indexation</span> </br>
         <span class="menu__item_gestion_admin">supervision du département</span></br>

</div>

<?php

    }

    if($_SESSION['pass'] == "Admin"){

        ?>

<div id="admindep">

    <p>Admin</p>
    <a href="gestion_admin_depart" class="menu__item_gestion_admindep">Gestion Admin Département</a>
</div> 

<?php

    }

    ?>
</div>

  <div id="depot_photo">

    <h4>Zone de dépôt de photo</h4>

    <form action="upload.php" enctype="multipart/form-data" method="post" id="formdepot">
      <div class="form_frontco">
        <label for="name"> </label>
        <input type="text" name="name" id="name" placeholder="Descritption" required>
      </div>
      <div class="form_frontco">
        <label for="adress"> </label>
        <input type="text" name="adress" id="adress" placeholder="Adresse du lieu" required>
      </div>

      <div class="form_frontco">
        <label for="link"> </label>
        <input type="text" name="link" id="link" placeholder="Lien de la page du lieu " required>
      </div>

      <div class="form_frontco">

      </div>
      <div id="zonededepot">
        <input type="file" name="image" accept="image/png, image/jpeg">
        <div draggable="true" class="box">Drag your files here or click in this area.</input>
          Drag your files here or click in this area.
        </div>
      </div>

      <input type="submit" value="Upload">
      <!--<button type="submit">Upload</button>-->
    </form>


  </div>
  <!-- <form id="dep-phot" action="upload.php" method="POST">
  <input type="file" multiple>
  <p>Drag your files here or click in this area.</p>
  <button type="submit">Upload</button>
</form> -->






</body>
<script>
  // $(document).ready(function() {
  //   $('form input').change(function() {
  //     $('form p').text(this.files.length + " file(s) selected");
  //   });
  // }); 
  let menuTogglead = document.getElementById('gestion_admin');
  const toad = document.getElementById("togadmin"); 
  const depot = document.getElementById("depot_photo"); 

  toad.addEventListener("click", function() 
  {
    toad.classList.toggle('active');
    menuTogglead.style.display = "block";
    depot.style.marginTop= "36vh"; 

    if (toad.classList == '') {
    menuTogglead.style.display = "none";
    depot.style.marginTop= "100vh"; 
}
  });  

//   document.onclick = function (e) {

// if (e.target.id !== 'toad') {
//     toad.classList.remove('active');
//     menuTogglead.style.display = "none";
// }

// if (toad.classList == '') {
//     menuTogglead.style.display = "none";
// }
  // }
</script>
</div>

</html>