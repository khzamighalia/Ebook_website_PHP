<?php
include "../Classes/livre.php";
session_start();
$cat=$_GET['id'];
$liv=new livre();
$array = array("Art et culture","Développement personnel", "Histoire géographie", "Romans et fiction","Sciences et technologies");
$categorie=$array[$cat];
$result = $liv->ChercheCat($categorie);
if(isset($_SESSION['login'])){
$result2 =$liv->CountTotal($_SESSION['id']);
}

?>
