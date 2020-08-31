<?php
include '../Classes/cart.php';
session_start();
$cart=new cart();
if(isset($_SESSION['login'])){
$id_user=$_SESSION["id"];
}   
$result2=$cart->AfficherPanier($id_user);
?>