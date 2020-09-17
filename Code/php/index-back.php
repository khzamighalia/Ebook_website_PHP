<?php
include "Classes/livre.php";
session_start();
$liv=new livre();
$result = $liv->AfficheNouveauxlivres();
if(isset($_SESSION['login'])){
$result2 =$liv->CountTotal($_SESSION['id']);
}
// if(isset($_POST['rcat'])){
// switch($_POST['rcat']) {
//     case 'ac':
//         header("Location: php/recherchecat.php");
//     break;
//     case 'dp':
//         // do Something for Best seller
//     break;
//     case 'rf':
//         // do Something for Alphabetical
//     break;
//     default:
//         // Something went wrong or form has been tampered.
//     }
// }
?>