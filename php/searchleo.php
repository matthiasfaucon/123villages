<?php
 $recherche=$_GET["name"]; 
 echo  $recherche; 

 header('location:'.$recherche.'.php'); 

 ?>