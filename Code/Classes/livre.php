<?php
include 'dbconnect.php';   
    class livre extends DB_con{ 
        function __construct() {  
            parent::__construct();         
        }  
        
        function __destruct() {  
              }  
        public function ajoutLivre($titre,$auteur,$image,$categorie,$langue,$prix,$stock){  
            
                $qr = $this->dbh->query("INSERT INTO livre(titre,auteur,img,categorie,langue,prix,stock) values('$titre','$auteur','$image','$categorie','$langue','$prix','$stock')");  
                return $qr;        
        }

        public function modLivre($id,$titre,$auteur,$categorie,$langue,$stock){   
            $qr =$this->dbh->query("UPDATE livre SET id='$id',titre='$titre',auteur='$auteur',categorie='$categorie',langue='$langue',stock='$stock' WHERE id='$id'");       
            if($qr)
               return TRUE;
            else  
               return FALSE;         
        }  
        public function modLivre2($id,$titre,$auteur,$img,$categorie,$langue,$stock){   
            $qr =$this->dbh->query("UPDATE livre SET id='$id',titre='$titre',auteur='$auteur',img='$img',categorie='$categorie',langue='$langue',stock='$stock' WHERE id='$id'");       
            if($qr)
               return TRUE;
            else  
               return FALSE;         
        }  
        
    
        public function deleteLivre($id){  
            $qr =mysqli_query($this->dbh,"DELETE FROM livre WHERE id='$id'");  
            if($qr)
               return TRUE;
            else  
               return FALSE;  
            
        }  
        public function AfficheLivres(){
            $qr = $this->dbh->query("SELECT * FROM livre") or die(mysql_error());       
               return $qr;
        }
        public function AfficheNouveauxlivres(){
            $qr = $this->dbh->query("SELECT * FROM livre ORDER BY id DESC LIMIT 8") or die(mysql_error());       
               return $qr;
        }
        public function AfficheLivre($id){
            $qr = $this->dbh->query("SELECT * FROM livre WHERE id='$id'") or die(mysql_error());       
            return $qr;
        }
        public function ChercheLangue($langue){
            $qr = $this->dbh->query("SELECT * FROM livre WHERE langue='$langue'") or die(mysql_error());       
            return $qr;
        }
        public function ChercheCat($categorie){
            $qr = $this->dbh->query("SELECT * FROM livre WHERE categorie='$categorie'") or die(mysql_error());       
            return $qr;
        }
        public function CherchePrix($prix){
            $qr = $this->dbh->query("SELECT * FROM livre WHERE prix='$prix'") or die(mysql_error());       
            return $qr;
        }
        public function ChercheLivre_Auteur($recherche){
            $qr = $this->dbh->query("SELECT * FROM livre WHERE auteur='$recherche' OR titre='$recherche'") or die(mysql_error());       
            return $qr;
        }
             

    }
    ?> 