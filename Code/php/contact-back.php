<?php
include "../Classes/livre.php";
session_start();
$liv=new livre();
if(isset($_SESSION['login'])){
$result2 =$liv->CountTotal($_SESSION['id']);
}

?>
