<?php
include "../Classes/livre.php";
session_start();
$liv=new livre();
$id=$_GET['id'];
$res=$liv->AfficheLivre($id);
$result2 =$liv->CountTotal($_SESSION['id']);

?>

