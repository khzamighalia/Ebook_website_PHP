<?php
include 'dbconnect.php';   
    class info extends DB_con{ 
        function __construct() {  
            parent::__construct();         
        }  
        
        function __destruct() {  
              }  
        public function afficheAd($id_user){   
            $qr =$this->dbh->query("SELECT * FROM adresse WHERE id_user='$id_user'");       
            return $qr;       
            }  
        public function ajoutAd($id_user,$adresse,$tel){  
                if($this->afficheAd($id_user)){
                    $qr =$this->dbh->query("UPDATE adresse SET adresse='$adresse',tel='$tel' WHERE id_user='$id_user'");       
                }
                else{
                $qr = $this->dbh->query("INSERT INTO adresse(id_user,adresse,tel) values('$id_user','$adresse','$tel')");  
                }
                return $qr;        
        }

      
        
        public function CountTotal($id_user){
            $qr =mysqli_query($this->dbh,"SELECT SUM(total) AS total_sum FROM panier WHERE id_user='$id_user'");  
            $row = mysqli_fetch_assoc($qr); 
            if($row['total_sum']!=0)
            return $row['total_sum'];
            else
            return 0;
            
        }  

    }
    ?> 