<?php
include "../Classes/livre.php";
session_start();
$id=$_GET['id'];
if(!$_SESSION['login']) 
header("Location: login.php");
else {
 $liv=new livre();
 $result=$liv->deleteLivre($id);
header("location:dashbord.php?uploadsuccess");
    }



        ?>
