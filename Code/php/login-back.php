<?php
include_once('../Classes/connection.php');
session_start(); 
 if(isset($_POST['log'])){
       $funObj = new connection();  
        $email = $_POST['email'];  
        $password = $_POST['password'];  
		$user = $funObj->Login($email,$password);  
        if ($user =='admin') {
            // Registration Success  
           header("location:dashbord.php"); 
        }
        else if($user =='user') {
           header("location:../index.php"); 
        } 
        else {  
            // Registration Failed 
            echo "<script>alert(\"l'email ou le mot de passe n'est pas correct\")</script>";  
            
        }  

    }  
    
if(isset($_POST['register'])){

        $funObj = new connection();   
            $firstname = $_POST['firstnamei'];
            $lastname = $_POST['lastnamei'];  
            $email = $_POST['emaili'];  
            $password = $_POST['passwordi'];  
            $confirmPassword = $_POST['password2'];  
            
            if($password == $confirmPassword){  
                $em = $funObj->isUserExist($email);  
                if(!$em){  
                    $register = $funObj->UserRegister($firstname,$lastname,$email, $password);  
                    if($register){ 
                        echo "<script>alert(\"Inscription réussie\")</script>"; 
                         header("location:login.php"); 
                    }else{  
                        echo "<script>alert(\"Une erreur est survenue, vérifiez les données saisis\")</script>";
                    }  
                } else {  
                    echo "<script>alert(\"Cette adresse email n'existe pas\")</script>"; 
                }  
            } else {  
                echo "<script>alert(\"Les mots de pass ne sont pas identiques\")</script>";
                  
              
            }  
        }
        
?>  