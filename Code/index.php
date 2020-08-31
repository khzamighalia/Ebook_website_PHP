<?php
include "php/index-back.php"
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

  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-inverse nav">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
    </div>
    <div class="collapse navbar-collapse menu" id="myNavbar">
      <ul class="nav navbar-nav menu">
      <form class="search2" action="/action_page.php">
      <input type="text" placeholder="Tapez un livre ou auteur" name="search">
      <button type="submit"><i class="fas fa-search"></i></button>
    </form>
        <li><a href="#">Accueil</a></li>
        <li><a href="php/boutique.php">Boutique</a></li>
        <?php
        if(isset($_SESSION['login'])){
    echo'<li><a href="php/compte.php"> Mon compte </a></li>';
  }
  else{
    echo'<li><a href="php/login.php">Authentification</a></li>';
}
         ?>   
   
        <li><a href="php/contact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <div class="search-container">
    <form class="search1" action="/action_page.php">
      <input type="text" placeholder="Tapez un livre ou auteur" class="inputtext" name="search">
      <button type="submit" class="inputsub">Chercher</button>
    </form>
    
  </div>
      </ul>
    </div>
  </div>
</nav>
<div class="row">
  <div class="select-cat col-md-2 col-12">
  <form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<select class="form-control form-control-lg " name="rcat">
  <option>--Chercher par catégories--</option>
  <option value="ac">Arts & Culture </option>
  <option value="dp"> <a href="recherchecat.php?cat=ac" type="button">Développement personnel</a> </option>
  <option value="hg"> <a href="recherchecat.php?cat=hg" type="button">Histoire & Géographie</a></option>
  <option value="rf"> <a href="recherchecat.php?cat=rf" type="button">Romans & Fictions</a></option>
  <option value="st"> <a href="recherchecat.php?cat=st" type="button">Sciences & Techniques</a></option>


</select>
</form>

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
  <h4 class="hh"> Panier </h4>
  <p class="pp">$0.00 
    <img src="images/iconarrow.png"></img></p>
</div>

</div>
<div class="container-fluid cnt">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  
    <ol class="carousel-indicators" >
      <li data-target="#myCarousel" data-slide-to="0" class="active" style="color: #8A2BE2; "></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

 
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/header1.jpg" style="width:100%;">
        <div class="carousel-caption d-none d-md-block">
        <h1>Wisdom</h1>
    <p>Bienvenue sur la boutique N°1 de livres au maroc</p>
    <a href="php/boutique.php"><button>Voir notre boutique</button></a>
    
  </div>
      </div>

      <div class="item">
        <img src="images/header2.jpg" style="width:100%;">
        <div class="carousel-caption d-none d-md-block">
        <h1>Wisdom </h1>
    <p>Vente en ligne de livres en français, anglais, espagnol et arabe .</p>
    <a href="php/boutique.php"><button>Voir notre boutique</button></a>
  </div>
      </div>
    
    </div>

   
  </div>
</div>
<div class="cattt container-fluid">
<div class="row">
  <div class="col-md-2">
  <div class="cat1">
  <br>
    <a href="st.php"> Sciences & Techniques </a>
    <br><i class="fas fa-chevron-right"></i>
    </div>
  </div>
  <div class="col-md-10">
    <div class="row">
  <div class="col-md-8">
    <div class="cat2">
    <br>
    <a href="dv.php"> développement personnel </a>
    <br><i class="fas fa-chevron-right"></i>
    </div>
</div>
<div class="col-md-4">
<div class="cat3">
<br>
<a href="rf.php"> Romans & fictions </a>
<br><i class="fas fa-chevron-right"></i>
    </div>
</div>
  </div>
  <div class="row">
  <div class="col-md-9">
  <div class="cat4">
  <br>
  <a href="ac.php">Art & Culture  </a> 
  <br><i class="fas fa-chevron-right"></i>  
</div></div>
<div class="col-md-3">
<div class="cat5">
<br>
<a href="hg.php"> Histoire & Géographie </a>
<br><i class="fas fa-chevron-right"></i>
    </div></div>
  </div>

</div>
</div>
</div> 
<div class="populaires" id="populaires">
<div class="titrescat">
  <button class="buttonslide-1 buttonslide-1x">Livres populaires</button>
  <button class="b2 buttonslide-2x">Nouveaux livres</button>
  <button class="buttonslide-3x">Livres les plus vues </button>
</div>
<div class="container">
<div class="row">
<div class="col-md-3 col-12 livre">
<h3> L'appel de l'ange </h3>
<p>  Guillaume Musso </p>
<div class="imglivre" >
<div class="imglivre11" >
<button class="fas fa-shopping-basket"></button>
<button class="fas fa-heart"></button>
<button class="fas fa-eye"></button>
</div>
</div>
<p class="prix">50$ </p>
</div>
<div class="col-md-3 col-12 livre">
<h3> L'appel de l'ange </h3>
<p>  Guillaume Musso </p>
<div class="imglivre" >
<div class="imglivre11" >
 <button class="fas fa-shopping-basket"></button>
<button class="fas fa-heart"></button>
<button class="fas fa-eye"></button>
</div>
</div>
<p class="prix">50$ </p>
</div>
<div class="col-md-3 col-12 livre">
<h3> L'appel de l'ange </h3>
<p>  Guillaume Musso </p>
<div class="imglivre" >
<div class="imglivre11" >
 <button class="fas fa-shopping-basket"></button>
<button class="fas fa-heart"></button>
<button class="fas fa-eye"></button>
</div>
</div>
<p class="prix">50$ </p>
</div>
<div class="col-md-3 col-12 livre">
<h3> L'appel de l'ange </h3>
<p>  Guillaume Musso </p>
<div class="imglivre" >
<div class="imglivre11" >
 <button class="fas fa-shopping-basket"></button>
<button class="fas fa-heart"></button>
<button class="fas fa-eye"></button>
</div>
</div>
<p class="prix">50$ </p>
</div>
<div class="col-md-3 col-12 livre">
<h3> L'appel de l'ange </h3>
<p>  Guillaume Musso </p>
<div class="imglivre" >
<div class="imglivre11" >
 <button class="fas fa-shopping-basket"></button>
<button class="fas fa-heart"></button>
<button class="fas fa-eye"></button>
</div>
</div>
<p class="prix">50$ </p>
</div>
<div class="col-md-3 col-12 livre">
<h3> L'appel de l'ange </h3>
<p>  Guillaume Musso </p>
<div class="imglivre" >
<div class="imglivre11" >
 <button class="fas fa-shopping-basket"></button>
<button class="fas fa-heart"></button>
<button class="fas fa-eye"></button>
</div>
</div>
<p class="prix">50$ </p>
</div>
<div class="col-md-3 col-12 livre">
<h3> L'appel de l'ange </h3>
<p>  Guillaume Musso </p>
<div class="imglivre" >
<div class="imglivre11" >
 <button class="fas fa-shopping-basket"></button>
<button class="fas fa-heart"></button>
<button class="fas fa-eye"></button>
</div>
</div>
<p class="prix">50$ </p>
</div>
<div class="col-md-3 col-12 livre">
<h3> L'appel de l'ange </h3>
<p>  Guillaume Musso </p>
<div class="imglivre" >
<div class="imglivre11" >
 <button class="fas fa-shopping-basket"></button>
<button class="fas fa-heart"></button>
<button class="fas fa-eye"></button>
</div>
</div>
<p class="prix">50$ </p>
</div>

</div>
</div>
</div>
<div class="nouveaux" id="nouveaux">
<div class="titrescat">
  <button class="buttonslide-1x" >Livres populaires</button>
  <button class="b2 buttonslide-2 buttonslide-2x">Nouveaux livres</button>
  <button class="buttonslide-3x">Livres les plus vues </button>
</div>
<div class="container">
<div class="row">
<?php while($row = $result->fetch_assoc()){
echo '<div class="col-md-3 col-12 livre">
<h3>'.$row['titre'].'</h3>
<p>'.$row['auteur'].' </p>
<div class="imglivre" >
<div class="imglivre11">
<a href="php/panierback.php?id='.$row['id'].'" type="button"><button class="fas fa-shopping-basket"></button></a>
<a href="php/favoris.php?id='.$row['id'].'" type="button"><button class="fas fa-heart"></button></a>
<a href="php/livredesc.php?id='.$row['id'].'" type="button"><button class="fas fa-eye"></button></a>
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
<div class="plusvues" id="plusvues">
<div class="titrescat">
  <button class="buttonslide-1x">Livres populaires</button>
  <button class="b2 buttonslide-2x">Nouveaux livres</button>
  <button class="buttonslide-3 buttonslide-3x">Livres les plus vues </button>
</div>
<div class="container">
<div class="row">
<div class="col-md-3 col-12 livre">
<h3> L'appel de l'ange </h3>
<p>  Guillaume Musso </p>
<div class="imglivre" >
<div class="imglivre11" >
 <button class="fas fa-shopping-basket"></button>
<button class="fas fa-heart"></button>
<button class="fas fa-eye"></button>
</div>
</div>
<p class="prix">50$ </p>
</div>
<div class="col-md-3 col-12 livre">
<h3> L'appel de l'ange </h3>
<p>  Guillaume Musso </p>
<div class="imglivre" >
<div class="imglivre11" >
 <button class="fas fa-shopping-basket"></button>
<button class="fas fa-heart"></button>
<button class="fas fa-eye"></button>
</div>
</div>
<p class="prix">50$ </p>
</div>
<div class="col-md-3 col-12 livre">
<h3> L'appel de l'ange </h3>
<p>  Guillaume Musso </p>
<div class="imglivre" >
<div class="imglivre11" >
 <button class="fas fa-shopping-basket"></button>
<button class="fas fa-heart"></button>
<button class="fas fa-eye"></button>
</div>
</div>
<p class="prix">50$ </p>
</div>
<div class="col-md-3 col-12 livre">
<h3> L'appel de l'ange </h3>
<p>  Guillaume Musso </p>
<div class="imglivre" >
<div class="imglivre11" >
 <button class="fas fa-shopping-basket"></button>
<button class="fas fa-heart"></button>
<button class="fas fa-eye"></button>
</div>
</div>
<p class="prix">50$ </p>
</div>
<div class="col-md-3 col-12 livre">
<h3> L'appel de l'ange </h3>
<p>  Guillaume Musso </p>
<div class="imglivre" >
<div class="imglivre11" >
 <button class="fas fa-shopping-basket"></button>
<button class="fas fa-heart"></button>
<button class="fas fa-eye"></button>
</div>
</div>
<p class="prix">50$ </p>
</div>
<div class="col-md-3 col-12 livre">
<h3> L'appel de l'ange </h3>
<p>  Guillaume Musso </p>
<div class="imglivre" >
<div class="imglivre11" >
 <button class="fas fa-shopping-basket"></button>
<button class="fas fa-heart"></button>
<button class="fas fa-eye"></button>
</div>
</div>
<p class="prix">50$ </p>
</div>
<div class="col-md-3 col-12 livre">
<h3> L'appel de l'ange </h3>
<p>  Guillaume Musso </p>
<div class="imglivre" >
<div class="imglivre11" >
 <button class="fas fa-shopping-basket"></button>
<button class="fas fa-heart"></button>
<button class="fas fa-eye"></button>
</div>
</div>
<p class="prix">50$ </p>
</div>

</div>
</div>
</div>
</div>
  <div class="plusvendus container-fluid">
    <h2 class="plusvenduss">LES LIVRES LES PLUS VENDUS
  </h2>
     <div class="plusvendusdiv container">
        <div class="row">
           <div class="col-md-5 col-12 plusvendusimg ">
             <img src="images/musso.png">
           </div>
            <div class="col-md-7 col-12 plusvenduslivres">
            <div class="row">
            <div class="col-md-3 col-6 livre2">
<div class="imglivre2" >
<button class="fas fa-shopping-basket"></button>
<button class="fas fa-heart"></button>
<button class="fas fa-eye"></button>
</div>
</div>
<div class="col-md-2 col-6">
<h3> L'appel de l'ange </h3>
<p> Guillaume Musso </p>
<p class="prix">50$ </p>
</div>
<div class="col-md-3 col-6 livre2">
<div class="imglivre2" >
<button class="fas fa-shopping-basket"></button>
<button class="fas fa-heart"></button>
<button class="fas fa-eye"></button>
</div>
</div>
<div class="col-md-2 col-6">
<h3> L'appel de l'ange </h3>
<p> Guillaume Musso </p>
<p class="prix">50$ </p>
</div>
</div>
<div class="row">
            <div class="col-md-3 col-6 livre2">
<div class="imglivre2" >
<button class="fas fa-shopping-basket"></button>
<button class="fas fa-heart"></button>
<button class="fas fa-eye"></button>
</div>
</div>
<div class="col-md-2 col-6">
<h3> L'appel de l'ange </h3>
<p> Guillaume Musso </p>
<p class="prix">50$ </p>
</div>
<div class="col-md-3 col-6 livre2">
<div class="imglivre2" >
<button class="fas fa-shopping-basket"></button>
<button class="fas fa-heart"></button>
<button class="fas fa-eye"></button>
</div>
</div>
<div class="col-md-2 col-6">
<h3> L'appel de l'ange </h3>
<p> Guillaume Musso </p>
<p class="prix">50$ </p>
</div>
</div>

</div>
</div>
</div>

</div>
<div class="container-fluid f ">
<div class="row">
  <div class="col-md-3 facilities">
    <div class="row row1">
      <div class="col-md-2">
      <i class="fas fa-truck-moving"></i>
    </div>
    <div class="col-md-10">
      <h4> Livraison gratuite</h4>
      <h6> Commandes à partir de $500</h6>
    </div>
    </div>
</div>
<div class="col-md-3 facilities">
    <div class="row row1">
      <div class="col-md-2">
      <i class="fas fa-undo"></i>
    </div>
    <div class="col-md-10">
      <h4> Garantie de remboursement</h4>
    </div>
    </div>
</div>
<div class="col-md-3 facilities">
    <div class="row row1">
      <div class="col-md-2 ">
      <i class="fas fa-piggy-bank"></i>   

    </div>
    <div class="col-md-10">
      <h4> Paiement à la livraison</h4>
    </div>
    </div>
</div>
<div class="col-md-3 facilities">
    <div class="row row1">
      <div class="col-md-2">
      <i class="fas fa-life-ring"></i> </div>
    <div class="col-md-10">
      <h4> Aide et soutien</h4>
      <h6> Appelez nous : 063737738</h6>
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
     <h4> <img src="images/logo.png"></h4>
      <h5><strong>Address:</strong>
       Example Street 98, HH2 BacHa, New York, USA 
      </h5>
      <h5><strong>Phone:</strong>
      +18088 234 5678
      </h5>
      <h5><strong>Email:</strong>
      support@wisdom.com</h5>
      </div>
<div class="col-md-3 col-12 h">
<h4>INFORMATION</h4>
      <h5>Nouveaus produits</h5>
      <h5>Meilleurs ventes</h5>
      <h5>Contactez nous</h5>
      <h5>Les plus vus</h5>
</div>
<div class="col-md-3 col-12 h">
<h4>EXTRAS</h4>
      <h5>Livraison</h5>
      <h5>Qui sômmes-nous?</h5>
      <h5><a href="php/boutique.php"> Boutique </a></h5>
      <h5><a href="php/contact.php">Contactez nous </a></h5>
</div>
<div class="col-md-3 col-12">
<h4>NEWLETTER</h4>
     <input type="text" placeholder="Entrez votre email ici">
      <button>S'INSCRIRE</button>
      <h5>Nous acceptons</h5>
      <i class="fab fa-cc-paypal"></i>
      <i class="fab fa-cc-visa"></i>
      <i class="fab fa-cc-discover"></i>
      <i class="fab fa-cc-amex"></i>
</div>
</div>
<div class="row">
  <div class="col-md-10">
  <h6><strong>Copyright © 2020 wisdom. All Right Reserved.</strong></h6>
</div>
<div class="col-md-2">
<i class="fab fa-facebook-square fb"></i>
<i class="fab fa-google-plus-square gplus"></i>
<i class="fab fa-twitter-square twitter"></i>
<i class="fab fa-pinterest-square pinterest"></i>
</div>
</div>
</footer>
<script src="js/script.js">
</script>
  

</body>
</html>
