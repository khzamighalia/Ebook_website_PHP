<?php
include "commande-back.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <link rel="stylesheet" type="text/css" href="../css/style2.css">
</head><body>
<nav class="navbar navbar-inverse nav">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" class="logo" href="#"><img src="../images/logo2.png"></a>
    </div>
    <div class="collapse navbar-collapse menu" id="myNavbar">
      <ul class="nav navbar-nav menu">
      <form class="search2" action="/action_page.php">
      <input type="text" placeholder="Tapez un livre ou auteur" name="search">
      <button type="submit"><i class="fas fa-search"></i></button>
    </form>
    <div class="search-container">
    <form class="search1" action="/action_page.php">
      <input type="text" placeholder="Tapez un livre ou auteur" class="inputtext" name="search">
      <button type="submit" class="inputsub">Chercher</button>
    </form>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
      
    <li><a href="../index.php">Accueil</a></li>
        <li><a href="boutique.php">Boutique</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pages <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Panier</a></li>
            <li><a href="#">Authentification</a></li>
          </ul>
        </li>
      
        <li><a href="contact.php">Contact</a></li>
    
      </ul>
    </div>
  </div>
</nav>
<div class="headd">
<h4> Accueil > Commande </h4>
<h4> <strong>COMMANDE</strong></h4>
</div>
<div class="container panier" >
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Image</th>
          <th>Titre</th>
          <th>Prix</th>
          <th>Quantité</th>
          <th>Total</th>
          
        </tr>
      </thead>
      <tbody>
      <?php
      while($row = $result2->fetch_assoc()){
        $id_pr=$row['id_produit'];
        $result3= $cart->dbh->query("SELECT * FROM livre WHERE id='$id_pr'");
        $row2 = $result3->fetch_assoc();

        
      echo '<tr>
              <td> <img src="'.$row2['img'].'"></td>
        <td>'.$row2['titre'].'</td>
        <td>'.$row2['prix'].'</td>
        <td>'.$row['qte'].'</td>
        <td>'.$row['total'].'</td>
        <input type="hidden" id="custId" name="id" value="'.$row['id'].'>">

      </tr>';}
      ?>
      </tbody>
    </table>
  </div>

</div>
<div class="container" >
    <div class="row">
      <div class="col-md-6">
<h4>Vous êtes peut être interessés par :</h4>
<div class="col-md-6 col-12 livre">
<h3> L'appel de l'ange </h3>
<p> L'Appel de l'ange est un roman de Guillaume Musso paru en 2011 chez XO éditions.  </p>
<div class="imglivre" >
<i class="fas fa-shopping-basket"></i>
<i class="fas fa-heart"></i>
<i class="fas fa-eye"></i>
</div>
</div>
<div class="col-md-6 col-12 livre">
<h3> L'appel de l'ange </h3>
<p> L'Appel de l'ange est un roman de Guillaume Musso paru en 2011 chez XO éditions.  </p>
<div class="imglivre" >
<i class="fas fa-shopping-basket"></i>
<i class="fas fa-heart"></i>
<i class="fas fa-eye"></i>
</div>
</div>

    </div>
    <div class="col-md-6">
    <div class="insdiv">
          <h4> Sommaire de la commande </h4>
          <h3>Total : <?php $cart->CountTotal($id_user); ?> </h3>
          <h3>Frais de livraison $50</h3>
          <hr>
          <h3>Total : <?php  $cart->CountTotalDef($id_user); ?> </h3>
  </div>
  <center>
  <button class="btncnxxx" >Valider la commande</button>
</center>
</div>
</div>
</div>
<!-- Footer -->
<footer class="container-fluid">
  <div class="row">
    <div class="col-md-3 col-12">
     <h3> <img src="../images/logo.png"></h3>
      <h4><strong>Address:</strong>
       Example Street 98, HH2 BacHa, New York, USA 
      </h4>
      <h4><strong>Phone:</strong>
      +18088 234 5678
      </h4>
      <h4><strong>Email:</strong>
      suport@wisdom.com</h4>
      </div>
<div class="col-md-3 col-12 h">
<h3>INFORMATION</h3>
      <h4>Nouveaus produits</h4>
      <h4>Meilleurs ventes</h4>
      <h4><a href="contact.php">Contactez nous</a></h4>
      <h4>Les plus vus</h4>
</div>
<div class="col-md-3 col-12 h">
<h3>EXTRAS</h3>
      <h4>Livraison</h4>
      <h4>Qui sômmes-nous?</h4>
      <h4><a href="boutique.php">Boutique</h4>
      <h4><a href="contact.php">Contactez nous</h4>
</div>
<div class="col-md-3 col-12">
<h3>NEWLETTER</h3>
     <input type="text" placeholder="Entrez votre email ici">
      <button>S'INSCRIRE</button>
      <h4>Nous acceptons</h4>
      <i class="fab fa-cc-paypal"></i>
      <i class="fab fa-cc-visa"></i>
      <i class="fab fa-cc-discover"></i>
      <i class="fab fa-cc-amex"></i>
</div>
</div>
<div class="row">
  <div class="col-md-10">
  <h5><strong>Copyright © 2020 wisdom. All Right Reserved.</strong></h5>
</div>
<div class="col-md-2">
<i class="fab fa-facebook-square fb"></i>
<i class="fab fa-google-plus-square gplus"></i>
<i class="fab fa-twitter-square twitter"></i>
<i class="fab fa-pinterest-square pinterest"></i>
</div>
</footer>

</div>
</body>
</html>