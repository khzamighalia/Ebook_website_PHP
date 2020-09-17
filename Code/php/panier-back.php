<?php
include '../Classes/cart.php';
session_start();
$cart=new cart();
if((isset($_POST['plusqte']))){
$idpanier=$_POST['idpanier'];
 $result3=$cart->plusqte($idpanier);
}
if((isset($_POST['moinsqte']))){
    $idpanier=$_POST['idpanier'];
 $result3=$cart->moinsqte($idpanier);
}
if(isset($_SESSION['login'])){
$id_user=$_SESSION["id"];
$result2=$cart->AfficherPanier($id_user);
}   


?>