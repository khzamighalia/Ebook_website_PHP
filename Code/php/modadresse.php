<?php  
session_start();
if(isset($_POST["modifier"]))  
{  $id_user = $_SESSION['id'];
// include "../Classes/info.php";
// $info=new info();
     $result = $info->afficheAd($id_user);  
     $row = mysqli_fetch_array($result);
     $output='';
     $output .= '  <h1> Adresse </h1>  
     <input type="text" value="'.$row["adresse"].'" >  
          <td width="70%">'.$row["adresse"].'</td>  
          <h1> Mobile </h1>  
          <input type="text" value="'.$row["tel"].'" >  
               <td width="70%">'.$row["adresse"].'</td> 
              
               ';  
      
     echo $output;  
}  
?>