<?php
include '../Classes/cart.php';
session_start();
$cart=new cart();
if(isset($_SESSION['login'])){
$id_user=$_SESSION["id"];
}   
$result2=$cart->AfficherPanier($id_user);
if(isset($_POST['validercmd'])){
    $total=$cart->CountTotalcmd($id_user);
    $now = new DateTime();
    $date=$now->format('Y-m-d H:i:s');  
    if($cart->Ajoutercmd($id_user,$total,$date)){
        header("Location: commandecomp.php");
    }
    else
    header("Location: panier.php");
}
?>