<?php
include "../Classes/livre.php";
if(!$_SESSION['login']) 
header("Location: login.php");
else {
 $livre=new livre();
 $res=$livre->AfficheLivres();
}
?>