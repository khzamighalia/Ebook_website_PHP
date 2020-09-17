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
            $qr = $this->dbh->query("INSERT INTO panier(id_produit,id_user,qte,prix,total) values('$id_produit','$id_user','$qte','$prix',$qr1*$prix')");  
            return $qr;     
        } 

        public function AjouterPanierIndex($id_produit,$id_user){
            $q=$this->dbh->query("SELECT * FROM panier WHERE id_produit='$id_produit' AND id_user='$id_user'");
            if(!mysqli_num_rows($q)){  
            $qr1 = $this->dbh->query("SELECT prix FROM livre WHERE id='$id_produit'");  
            $prix=$qr1->fetch_array()[0] ?? '';
            $qr = $this->dbh->query("INSERT INTO panier(id_user,id_produit,qte,prix,total) values('$id_user','$id_produit',1,'$prix','$prix*$qte')");  
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
        public function deletePaniercmd($id_user){
            $qr =mysqli_query($this->dbh,"DELETE FROM panier WHERE id_user='$id_user'");  
            if($qr)
               return TRUE;
            else  
               return FALSE;  
            
        }
        public function CountTotal($id_user){
            $qr =mysqli_query($this->dbh,"SELECT SUM(total) FROM panier WHERE id_user='$id_user'");  
            $prix=$qr->fetch_array()[0] ?? '';
            if(!$prix)
            echo "".$prix."$ ";
            else
            echo " 0.00$ ";
        }
        public function CountTotalDef($id_user){
            $qr =mysqli_query($this->dbh,"SELECT SUM(total) FROM panier WHERE id_user='$id_user'");  
            $prix=$qr->fetch_array()[0] ?? '';
            $prix+=50;
            echo "".$prix."$ ";
        }
        public function CountTotalcmd($id_user){
            $qr =mysqli_query($this->dbh,"SELECT SUM(total) as sum_total FROM panier WHERE id_user='$id_user'");
            $total=$qr->fetch_array();
            if($prix=$total['sum_total']){
            $prix+=50;
            return $prix;
            }
        }
    
    public function plusqte($id){
        $qte =mysqli_query($this->dbh,"SELECT id_produit,qte,total FROM panier  WHERE id='$id'"); 
        // $qt=$qte->fetch_array()[0] ?? '';
        $result = $qte->fetch_array();
        $resultqte = $result['qte'];
        $resulttotal = $result['total'];
        $resultprod = $result['id_produit'];
        $p =mysqli_query($this->dbh,"SELECT prix FROM livre  WHERE id='$resultprod'"); 
        $result2 = $p->fetch_array();
        $resultprix = $result2['prix'];
        $resultqte++;
        $total=$resultqte*$resultprix;
        $qr =mysqli_query($this->dbh,"UPDATE panier SET id='$id', qte='$resultqte', total='$total' WHERE id='$id'");  
    }
    public function moinsqte($id){
        $qte =mysqli_query($this->dbh,"SELECT id_produit,qte,total FROM panier  WHERE id='$id'"); 
        // $qt=$qte->fetch_array()[0] ?? '';
        $result = $qte->fetch_array();
        $resultqte = $result['qte'];
        $resulttotal = $result['total'];
        $resultprod = $result['id_produit'];
        $p =mysqli_query($this->dbh,"SELECT prix FROM livre  WHERE id='$resultprod'"); 
        $result2 = $p->fetch_array();
        $resultprix = $result2['prix'];
        $resultqte--;
        $total=$resultqte*$resultprix;
        $qr =mysqli_query($this->dbh,"UPDATE panier SET id='$id', qte='$resultqte', total='$total' WHERE id='$id'"); 
    }
    public function Ajoutercmd($id_user,$total,$date){ 
        $ad=$this->dbh->query("SELECT * FROM adresse WHERE id_user='$id_user'");
        $row =$ad->fetch_assoc();
        $adresse=$row['adresse'];
        $qr = $this->dbh->query("INSERT INTO commande(id_user,total,date,adresse) values('$id_user','$total','$date','$adresse')");  
        return $qr;     
    } 
    public function Affichercmd($id_user){
        $qr = $this->dbh->query("SELECT * FROM commande WHERE id_user='$id_user' ");  
        return $qr;     
    }
    public function Afficheruser($id_user){
        $qr = $this->dbh->query("SELECT firstname,lastname FROM users WHERE id='$id_user' ");
        return $qr;     
    }
    
    public function Affichercmddashbord(){
        $qr = $this->dbh->query("SELECT * FROM commande ");  
        return $qr;     
    }
    public function AfficheLivre($id){
        $qr = $this->dbh->query("SELECT * FROM livre WHERE id='$id'") or die(mysql_error());       
        return $qr;
    }
    public function CountTotalc($id_user){
        $qr =mysqli_query($this->dbh,"SELECT SUM(total) AS total_sum FROM panier WHERE id_user='$id_user'");  
        $row = mysqli_fetch_assoc($qr); 
        if($row['total_sum']!=0)
        return $row['total_sum'];
        else
        return 0;
        
    }  
 
    
}

?>