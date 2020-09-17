<?php
require_once '../Classes/cart.php';
session_start();
$cart=new cart();
if(isset($_SESSION['login'])){
$id_user=$_SESSION["id"];
}   
$result=$cart->Affichercmd($id_user);
$result2=$cart->AfficherPanier($id_user);
$resulttotal=$cart->CountTotalcmd($id_user);
?>