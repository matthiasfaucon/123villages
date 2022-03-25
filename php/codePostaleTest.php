<!doctype html>
<html>
<head>
<title> Rappel DOM </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- <link href="style.css" rel="stylesheet" type="text/css" media="screen"> -->

</head>
<body>
<section id="codePostaux">

</section>
<!-- 
    <p>Votre nom : <input type='text' name='nom' /></p>
    <p>Votre prenom : <input type='text' name='prenom' /></p>
    <button href="php_codePostal.php">connexion</button> -->
    
<script type="text/javascript">

function creationXHR()
{
var resultat = null;
try {resultat = new XMLHttpRequest(); }
catch (Error) { // Internet Explorer
try {resultat = new ActiveXObject("Msxml2.XMLHTTP");}
catch (Error){
try {resultat = new ActiveXObject("Microsoft.XMLHTTP");}
catch (Error) {// XMLHttpRequest non supporte par le navigateur
resultat=null;
}
}
}
console.log("creation objet XHR :"+resultat);
return resultat;
}



// function efface(){
// document.getElementsByName('nom')[0].value="";
// }

function traitementReponse()
{
console.log(xhr.readyState); // 2 3 4
if (xhr.readyState == 4)
{
if (xhr.status == 200)
{
text = xhr.responseText;
console.log(text);
affichage.innerHTML = '<h2>'+ text +'</h2>';
alert(xhr.getAllResponseHeaders());
alert(xhr.getResponseHeader('headerLabel'));
}
else { alert("problème de connection au serveur !");}
}
}

document.addEventListener("load",function(){


console.log("demarrage application");
xhr = creationXHR();
console.log(xhr.readyState);
affichage=document.getElementById("codePostaux");
console.log('envoi requete AJAX');
// envoi de la requête au serveur
// let titi = "titou";
xhr.open("GET","php_codePostal.php", true); //true asynchrone / false synchrone (obsolete)
console.log(xhr.readyState);
xhr.onreadystatechange = traitementReponse;
xhr.send(null);

});
// console.log("demarrage application");
// xhr = creationXHR();
// affichage=document.getElementById("coucou");
// console.log('envoi requete AJAX');
// // envoi de la requête au serveur
// xhr.open("GET","email.xml", true);
// xhr.responseText = traitementReponse;
// xhr.send(null);
// document.getElementsByName('nom')[0].addEventListener("click",efface);






























// function creationXHR()
// {
// var resultat = null; 
// try {
//     resultat = new XMLHttpRequest();
// }
// catch (Error) { // Internet Explorer

//     try {
//         resultat = new ActiveXObject("Msxml2.XMLHTTP");
//     }
//     catch (Error){ 

//         try {
//             resultat = new ActiveXObject("Microsoft.XMLHTTP");
//         }
//         catch (Error) {// XMLHttpRequest non supporte par le navigateur
//             resultat=null
// }
// }
// }
// console.log("creation objet XHR :"+resultat);
// return resultat;
// }

// function traitementReponse()
// {
// if (xhr.readyState == 4)
// {
// if (xhr.status == 200)
// {
// text = xhr.responseText;
// console.log(text);
// affichage.innerHTML = '<h2>'+ text +'</h2>';
// }
// else { alert("problème de connection au serveur !");}
// }
// }


// console.log("demarrage application");
// xhr = creationXHR();
// affichage=document.getElementById("message");
// console.log('envoi requete AJAX');
// // envoi de la requête au serveur
// xhr.open("GET","test.txt", true);
// xhr.onreadystatechange = traitementReponse;
// xhr.send(null);

</script>

</body>
</html>
