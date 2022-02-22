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
} // Instanciation d'un objet xmlHTTPRequest en fonction du navigateur utilisé