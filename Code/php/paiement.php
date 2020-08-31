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
<div class="container-fluid">
<div class="row cnt-navbar">
  <div class="select-cat col-md-10">
<select class="form-control form-control-lg ">
  <option>--Chercher par catégories--</option>
  <option value="">Arts & Culture </option>
  <option value=""> Développement personnel</option>
  <option value="">Histoire & Géographie</option>
  <option value="">Romans & Fictions</option>
  <option value="">Sciences & Techniques</option>


</select>

</div>
<div class="select-cat col-md-2 col-12">
<select class="form-control form-control-lg">
  <option>-- Chercher par langues --</option>
  <option> Arabe </option>
  <option> Anglais </option>
  <option> Espagnol </option>
  <option> Français </option>
  </select>
</div>
<div class="col-md-2 log-menu">
<?php
  if(isset($_SESSION['login'])){
    echo'<br> <a class="nom" href="php/compte.php"> <i class="fas fa-user"></i> '.$_SESSION['firstname'].' '.$_SESSION['firstname'].' </a>';
  }
  else{
    echo'<a class="login" href="php/login.php"><strong>Connexion </strong></a><br> <span class="ou"> ou </span> 
<a class="ins" href="php/auth.php">Inscription</a>';
}
?>
</div>
<div class="col-md-1 pap">
<i class="fab fa-opencart cartmenu" ></i>
</div>
<div class="col-md-1 pa">
  <h3 class="hh"> Panier </h3>
  <p class="pp">$0.00 
    <img src="../images/iconarrow.png"></img></p>
</div>
</div>
</div>

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
        <?php
        if(isset($_SESSION['login'])){
    echo'<li><a href="php/compte.php"> Mon compte </a></li>';
  }
  else{
    echo'<li><a href="php/login.php">Authentification</a></li>';
}
         ?>   
        <li><a href="contact.php">Contact</a></li>
    
      </ul>
    </div>
  </div>
</nav>
<div class="row cntnavb-mobile">
  <div class="select-cat col-md-10">
<select class="form-control form-control-lg ">
  <option>--Chercher par catégories--</option>
  <option value="">Arts & Culture </option>
  <option value=""> Développement personnel</option>
  <option value="">Histoire & Géographie</option>
  <option value="">Romans & Fictions</option>
  <option value="">Sciences & Techniques</option>
</select>
</div>
<div class="cttt">
<div class="select-cat col-md-2 col-12">
<select class="form-control form-control-lg">
  <option>-- Chercher par langues --</option>
  <option> Arabe </option>
  <option> Anglais </option>
  <option> Espagnol </option>
  <option> Français </option>
  </select>
</div>
</div>
</div><div class="headd">
<h4> Accueil > Mon compte </h4>
<h4> <strong>MON COMPTE</strong></h4>
</div>
<div class="container-fluid boutique" >
  <div class="row">
    <div class="col-md-3 col-12 comptebar" >
        <div class="cptpagediv ">
      <button class="cpt"><a href="compte.php"><i class="fas fa-tachometer-alt"></i> tableau de bord</a></button>
      </div>
      <div class="cptpagediv">
      <button class="cpt"><a href="commandes.php"><i class="fas fa-cart-arrow-down"></i> Commandes </a></button>
      </div>
      <div class="cptpagediv">
      <button class="cpt "><a href="telechargements.php"> <i class="fas fa-download"></i>téléchargements</a></button>
      </div>
      <div class="cptpagediv cptpage">
      <button class="cptpage"> <a href="paiement.php"><i class="far fa-credit-card"></i>paiement </a> </button>
      </div>
      <div class="cptpagediv">
      <button class="cpt"><a href="adresse.php"> <i class="fas fa-map-marker"></i>adresse </a></button>
      </div>
      <div class="cptpagediv">
      <button class="cpt"> <a href="details.php"> <i class="fas fa-user"></i>détails du compte </a></button>
      </div>
      <div class="cptpagediv">
      <button class="cpt"><a href="logout.php"> <i class="fas fa-sign-out-alt"></i>déconnexion </a></button>
      </div>
</div>
    <div class="col-md-9 col-12" >
    <div class="cntcmd">
    <h2>PAIEMENT</h2>
    <hr class="hr1">
    <h3>Choisissez votre méthode de paiement</h3>
    <div>
  <input type="radio" id="paypal" name="paiement" value="paypal"
         checked>
  <label for="paypal"> <h5><strong style="margin-right:50px">Paypal </strong> Paiement sécurisé. Carte de crédit en ligne nécessaire</h5></label> <img class="paypaimg" src="../images/paypal.jpg">
</div>
<div>
  <input type="radio" id="cc" name="paiement" value="cc"
         >
  <label for="cc"> <h5><strong style="margin-right:20px">Crédit Card </strong> Paiement sécurisé.  Carte de crédit en ligne nécessaire</h5></label>  <img class="ccimg" src="../images/creditcard.png">
</div>
<h3>Numéro de la carte bancaire</h3>
<input type="text" class="code" placeholder="0000 0000 0000 xxxx">
<div class="row nnn2">
          <div class="col-md-6" >
          <label>Code ccv</label><br>
          <input type="text" name="nom" class="nn2">
</div>
          <div class="col-md-6" >
          <label>Date d'éxpiration</label><br>
          <input type="text" name="prenom" class="nn2">
</div>
</div>
<div class="row">
          <div class="col-md-6" >
          <button class="confirm"><i class="fas fa-edit"></i> Confirmer les changements</button>
</div>
</div>

  
    </div>
</div>
</div>

</div>
</div>
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
      <h4><a href="boutique.php">Boutique</a></h4>
      <h4><a href="contact.php">Contactez nous</a></h4>
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

    