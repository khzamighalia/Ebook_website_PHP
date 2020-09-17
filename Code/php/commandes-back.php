<?php
include "../Classes/cart.php";
session_start();
$cart=new cart();
if(isset($_SESSION['login'])){
$id_user=$_SESSION["id"]; 
$result=$cart->Affichercmd($id_user);
$result2 =$cart->CountTotalc($id_user);
}  

?>
