<?php
include "../Classes/cart.php";
session_start();
if(!$_SESSION['login']) 
header("Location: login.php");
else {
 $cart=new cart();
 $res=$cart->Affichercmddashbord();
}
if (isset($_POST['switch'])){
    $id=$_POST['id'];
    $resswitch=$cart->switch($id);
    header("Location: dash-commandes.php");

}
?>