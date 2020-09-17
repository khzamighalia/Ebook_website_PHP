<?php
include "../Classes/livre.php";
session_start();
$liv=new livre();
$result2 =$liv->CountTotal($_SESSION['id']);

?>
