<?php
include 'dbconnect.php';   
    class connection extends DB_con{ 
        function __construct() {  
            parent::__construct();         
        }  
        
        function __destruct() {  
              }  
        public function UserRegister($firstname,$lastname,$email, $password){  
                $mypassword = md5($password);  
                $qr = $this->dbh->query("INSERT INTO users(firstname,lastname,email, password,statut) values('$firstname','$lastname','$email','$mypassword','user')") or die(mysql_error());  
                return $qr;        
        }

        public function Login($email, $password){    
            $mypassword=md5($password);
            $res=$this->dbh->query("SELECT * FROM users WHERE email ='$email' AND password='$mypassword'");  
            if ($user_data=$res->fetch_assoc()) {
                $_SESSION['login']=true;   
			    $_SESSION["id"]=$user_data["id"]; 
                $_SESSION["email"]=$user_data["email"];
                $_SESSION["statut"]=$user_data["statut"];
                $_SESSION["firstname"]=$user_data["firstname"];
                $_SESSION["lastname"]=$user_data["lastname"];

                return $user_data["statut"];
            }  
            else  
                // return FALSE;
                var_dump($res);         
        }  
        
    
        public function isUserExist($email){  
            $qr = $this->dbh->query("SELECT * FROM users WHERE email = '$email' ");  
            echo $row = mysqli_num_rows($qr);  
            if($row > 0)
                return true;  
            else   
                return false;  
            
        }  

             

    }
    ?> 