<?php
include "../Classes/cart.php";
session_start();
$id=$_GET['id'];
 $c=new cart();
 $result=$c->deletePanier($id);
 if($result)
header("location:panier.php?uploadsuccess");
else
header("location:panier.php?uploadfailed");

        ?>
