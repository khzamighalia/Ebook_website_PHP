<?php
// Initialize the session
session_start();
if ($_SESSION["statut"]=='user') {
    // Registration Success  
    $loc=1;
} 
else { 
    $loc=0; 
    // Registration Failed  
}  
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
if($loc){
header("location:../index.php");} 
else{
    header("location:login.php"); 
}
exit;
?>