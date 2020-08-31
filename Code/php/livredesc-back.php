<?php
include "../Classes/livre.php";
$liv=new livre();
$id=$_GET['id'];
$res=$liv->AfficheLivre($id);



?>