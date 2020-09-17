<?php
include "../Classes/info.php";
// include "modadresse.php";
session_start();
$id_user=$_SESSION['id'];
$info=new info();
$result = $info->afficheAd($id_user);  
$row =$result->fetch_assoc();
$result2 =$info->CountTotal($_SESSION['id']);
if(isset($_POST['confirmermod'])){
    $adresse=$_POST['modadresse'];
    $tel=$_POST['modtel'];
    $result3 = $info->ajoutAd($id_user,$adresse,$tel); 
    header("Location: adresse.php");
}


?>
