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
        <li class="active"><a href="#">Accueil</a></li>
        <li><a href="#">Boutique</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pages <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Panier</a></li>
            <li><a href="#">Authentification</a></li>
          </ul>
        </li>
      
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Tapez un livre ou auteur" class="inputtext" name="search">
      <button type="submit" class="inputsub">Chercher</button>
    </form>
  </div>
      </ul>
    </div>
  </div>
</nav>
<div class="row">
  <div class="select-cat col-md-3">
<select class="form-control form-control-lg">
  <option><i class="fas fa-list"></i>Large select</option>
  </select>

</div>
<div class="select-cat col-md-3">
<select class="form-control form-control-lg">
  <option>Large select</option>
  </select>
</div>
<div class="col-md-3 log-menu">
<a href="auth.php">Connexion</a> ou <br>
<a href="auth.php">Inscription</a>
</div>
<div class="col-md-3 log-menu">
<i class="fal fa-shopping-cart"></i>
</div>

</div>
</body>
</html>
