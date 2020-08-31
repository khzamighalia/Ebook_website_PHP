<?php
include 'dbconnect.php';   
    class cart extends DB_con{ 
        function __construct() {  
            parent::__construct();          
        }  
        
        function __destruct() {  
              }  
            
        public function AjouterPanier($id_produit,$id_user,$qte){
            $qr1 = $this->dbh->query("SELECT prix FROM livre WHERE id='$id'");  
            $qr = $this->dbh->query("INSERT INTO panier(id_produit,id_user,qte,prix,$total) values('$id_produit','$id_user','$qte','$prix',$qr1*$prix')");  
            return $qr;     
        }  
        public function AjouterPanierIndex($id_produit,$id_user){
            $q=$this->dbh->query("SELECT * FROM panier WHERE id_produit='$id_produit' AND id_user='$id_user'");
            if(!mysqli_num_rows($q)){  
            $qr1 = $this->dbh->query("SELECT prix FROM livre WHERE id='$id_produit'");  
            $prix=$qr1->fetch_array()[0] ?? '';
            $qr = $this->dbh->query("INSERT INTO panier(id_user,id_produit,qte,prix,total) values('$id_user','$id_produit',1,'$prix','$prix')");  
            return $qr;    
        }
        else {
            echo "<script>alert(\"Ce livre existe déjà \")</script>";
            header("Location:panier.php");
        } 
        }  
        public function AfficherPanier($id_user){
            $qr = $this->dbh->query("SELECT * FROM panier WHERE id_user='$id_user' ");  
            return $qr;     
        }       
            
        public function deletePanier($id){
            $qr =mysqli_query($this->dbh,"DELETE FROM panier WHERE id='$id'");  
            if($qr)
               return TRUE;
            else  
               return FALSE;  
            
        }
        public function CountTotal($id_user){
            $qr =mysqli_query($this->dbh,"SELECT SUM(total) FROM panier WHERE id_user='$id_user'");  
            $prix=$qr->fetch_array()[0] ?? '';
            echo "".$prix."$ ";
        }
        public function CountTotalDef($id_user){
            $qr =mysqli_query($this->dbh,"SELECT SUM(total) FROM panier WHERE id_user='$id_user'");  
            $prix=$qr->fetch_array()[0] ?? '';
            $prix+=50;
            echo "".$prix."$ ";
        }
    
    public function plusqte($id){
        $qte =mysqli_query($this->dbh,"SELECT qte FROM panier  WHERE id='$id'"); 
        // $qt=$qte->fetch_array()[0] ?? '';
        $result = $qte->fetch_array();
        $result = intval($result[0]);
        $result++;
        $qr =mysqli_query($this->dbh,"UPDATE panier SET id='$id', qte='$result' WHERE id='$id'");  
    }
    public function moinsqte($id){
        $qte =mysqli_query($this->dbh,"SELECT qte FROM panier  WHERE id='$id'"); 
        // $qt=$qte->fetch_array()[0] ?? '';
        $result = $qte->fetch_array();
        $result = intval($result[0]);
        if($result>0)
        $result--;
        $qr =mysqli_query($this->dbh,"UPDATE panier SET id='$id', qte='$result' WHERE id='$id'");  
    }
}

?>