<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.svg">
    <title>depot_photo</title>
</head>
<body>
<div id="gestion_admin">

<div id="membre">
    <p>Membre</p>

    
        <span class="menu__item_gestion_membre">Dépôt de photos</span></br>
        <span class="menu__item_gestion_membre">Proposition modification d'informations</span></br>
        <span class="menu__item_gestion_membre">Photos validées</span></br>
    
</div>
 <div id="admin"> 
    <p>Admin</p>


   
         <span class="menu__item_gestion_admin">Espace validation photos</span></br>
         <span class="menu__item_gestion_admin">Espace validation texte</span></br>
         <span class="menu__item_gestion_admin">Espace création lieu</span> </br>
         <span class="menu__item_gestion_admin">Campagnes de mail</span></br>
         <span class="menu__item_gestion_admin">mise à jour SiteMap</span></br>
         <span class="menu__item_gestion_admin">Indexation</span> </br>
         <span class="menu__item_gestion_admin">supervision du département</span></br>
 
</div> 

<div id="admindep">

    <p>Admin département </p>
    <span class="menu__item_gestion_admindep">Gestion Admin Département</span>
</div> 
</div>
 
<div id="depot_photo">
<form action="upload.php" method="POST">
  <input type="file" multiple>
  <p>Drag your files here or click in this area.</p>
  <button type="submit">Upload</button>
</form>

</div>
    
</body> 
<!-- <script> 
$(document).ready(function(){
  $('form input').change(function () {
    $('form p').text(this.files.length + " file(s) selected");
  });
});
</script>  -->
</html>