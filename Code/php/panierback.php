<?php
include '../Classes/cart.php';
session_start();
$cart=new cart();   
if($_GET['id']){
    $id=$_GET["id"];
    if(isset($_SESSION['login'])){
    $id_user=$_SESSION["id"];
    $result=$cart->AjouterPanierIndex($id,$id_user);
    }
    if($result)
    header("Location:panier.php");
    
}
?>