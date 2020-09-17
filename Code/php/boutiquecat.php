<?php
include "boutiquecat-back.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
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
<div class="">
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
    echo'<a class="login" href="php/login.php"><strong>Connexion </strong></a><br> <span class="ou"> ou </span> 
<a class="ins" href="php/auth.php">Inscription</a>';
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
</div>
<div class="headd">
<h4> Accueil > Boutique </h4>
<h4> <strong>BOUTIQUE</strong></h4>
</div>
<div class="container-fluid boutique" >
  <div class="row">
    <div class="col-md-3 sidebar1" >
      <button class="titreb1"> catégories</button>
      <div class="but">
      <div class="but1">
      <a href="boutiquecat.php?id=1"><button>  Arts & Culture</button></a>
</div>
      <div class="but1">
      <a href="boutiquecat.php?id=2"><button>Développement personnel</button></a>
      </div>
      <div class="but1">
      <a href="boutiquecat.php?id=3"><button>Histoire & Géographie</button></a>
      </div>
      <div class="but1">
      <a href="boutiquecat.php?id=4"><button>Romans & Fictions</button></a>
      </div>
      <div class="but1">
      <a href="boutiquecat.php?id=5"><button>Sciences & Techniques</button></a>
      </div>
</div>
<button class="titreb2"> Langues</button>
<div>
  <input type="radio" id="anglais" name="langue" value="anglais"
         checked>
  <label for="anglais">Anglais</label>
</div>

<div>
  <input type="radio" id="arabe" name="langue" value="arabe">
  <label for="arabe">Arabe</label>
</div>

<div>
  <input type="radio" id="espagnol" name="langue" value="espagnol">
  <label for="espagnol">Espagnol</label>
</div>
<div>
  <input type="radio" id="français" name="langue" value="français">
  <label for="français">Français</label>
</div>

<button class="titreb3"> Prix</button>
<div>
  <input type="radio" id="moins" name="prix" value="moins"
         checked>
  <label for="moins">-$25</label>
</div>

<div>
  <input type="radio" id="entre" name="prix" value="entre">
  <label for="entre">$25-$50</label>
</div>

<div>
  <input type="radio" id="plus" name="prix" value="plus">
  <label for="plus">+$50</label>
</div>
</div>

    <div class="col-md-9" >
    
    <div class="">
<div class="row">
<?php while($row = $result->fetch_assoc()){
echo '<div class="col-md-4 col-12 livre">
<h3>'.$row['titre'].'</h3>
<p>'.$row['auteur'].' </p>
<div class="imglivre" >
<div class="imglivre11">
<a href="panierback.php?id='.$row['id'].'" type="button"><button class="fas fa-shopping-basket"></button></a>
<a href="favoris.php?id='.$row['id'].'" type="button"><button class="fas fa-heart"></button></a>
<a href="livredesc.php?id='.$row['id'].'" type="button"><button class="fas fa-eye"></button></a>
</div>
</div>
<p class="prix">'.$row['prix'].'$ </p>
</div>
';
}
?>
</div>
</div>
</div>
</div>
</div>
    </div>

  </div>
  
<!-- Footer -->
<footer class="container-fluid">
  <div class="container">
  <div class="row">
    <div class="col-md-3 col-12">
     <h3> <img class="logo" src="../images/logo2.png"></h3>
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
      <h4><a href="contact.php"> Contactez nous </a></h4>
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
</div>
</footer>
</div>
<script src="../js/script.js"></script>
</body>
</html>
