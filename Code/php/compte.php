<?php
include "compte-back.php";
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
</head>
<body>
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
    echo'<br> <a class="nom" href="compte.php"> <i class="fas fa-user"></i> '.$_SESSION['firstname'].' '.$_SESSION['firstname'].' </a>';
  }
  else{
    echo'<a class="login" href="login.php"><strong>Connexion </strong></a><br> <span class="ou"> ou </span> 
<a class="ins" href="register.php">Inscription</a>';
}
?>
</div>
<div class="col-md-1 pap">
<i class="fab fa-opencart cartmenu" ></i>
</div>
<?php
        if(isset($_SESSION['login'])){
    echo'
    <div class="col-md-1 pa2">
  <h4 class="hh"><a href="panier.php"> Panier </a></h4>
<p class="pp2">'.$result2.'.00$ <i class=" arr fas fa-angle-down"></i></p>';
  }
  else{
    echo'<div class="col-md-1 pa">
    <h4 class="hh"><a href="panier.php"> Panier </a></h4>
  <p class="pp"> $0.00 <i class=" arr fas fa-angle-down"></i>
  </p>';
}
         ?>  
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
    echo'<li><a href="compte.php"> Mon compte </a></li>';
  }
  else{
    echo'<li><a href="login.php">Authentification</a></li>';
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
</div>
<div class="headd">
<h4> Accueil > Mon compte </h4>
<h4> <strong>MON COMPTE</strong></h4>
</div>
<div class="container-fluid boutique" >
  <div class="row">
    <div class="col-md-3 comptebar" >
    <a  href="compte.php">
    <div class="cptpagediv cptpage">
        <button class="cptpage"> <i class="fas fa-tachometer-alt"></i> tableau de bord</button>
    </div>
    </a>
      <a href="commandes.php">
      <div class="cptpagediv">
      <button class="cpt"><i class="fas fa-cart-arrow-down"></i> Commandes</button>
      </div>
      </a>
      <a href="adresse.php">
      <div class="cptpagediv">
      <button class="cpt"><i class="fas fa-map-marker"></i>adresse</button>
      </div> </a>
      <a href="details.php">
      <div class="cptpagediv">
      <button class="cpt"> <i class="fas fa-user"></i>détails du compte</button>
      </div></a>
      <a href="logout.php">
      <div class="cptpagediv">
      <button class="cpt"><i class="fas fa-sign-out-alt"></i>déconnexion</button>
      </div>
      </a>
</div>
    <div class="col-md-9" >
    <div class="cntcpt">
    <h2>TABLEAU DE BORD</h2>
    <hr class=hr1>
    <p>Bonjour <?php if(isset($_SESSION['login'])){
    echo' '.$_SESSION['firstname'].' '.$_SESSION['firstname'].',';
  }?>
  <br><br>

Depuis le tableau de bord de votre compte. vous pouvez facilement vérifier et afficher vos commandes récentes,<br>
 gérer vos adresses de livraison et de facturation et modifier votre mot de passe et les détails de votre compte.</p><br>
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
      <h4>Contactez nous</h4>
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
  <div class="rs">
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
