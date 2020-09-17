<?php
include "../Classes/livre.php";
session_start();
$liv=new livre();
$result = $liv->AfficheNouveauxlivres();
if(isset($_SESSION['login'])){
$result2 =$liv->CountTotal($_SESSION['id']);
}

?>
