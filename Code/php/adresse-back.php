<?php
include "../Classes/info.php";
// include "modadresse.php";
session_start();
$id_user=$_SESSION['id'];
$info=new info();
$result = $info->afficheAd($id_user);  
$row =$result->fetch_assoc();
$result2 =$info->CountTotal($_SESSION['id']);

?>

