<?php
 include "dash-commandes-back.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


  <title>Wisdom - Dashboard</title>

  <!-- Custom fonts for this template-->

  <!-- Custom styles for this template-->
  <link href="../css/style3.css" rel="stylesheet">

</head>

<body>
<div class="container cc">
  <div id="navbar" class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="navbar-brand" href="#" title="Home" rel="home"></a>
    </div>

    <div class="clearfix"></div>
    <div class="collapse navbar-collapse">
      <ul class="nav nav-stacked" id="menu-bar">
      <li><img src="../images/logo2.png"></li>
        <li><a href="dashbord.php">Tableau de bord</a></li>
        <li><a href="dash-commandes.php">Commandes</a></li>
      </ul>
    </div> 
  </div>
</div>
<div class="cont">
<div class="topp">
<div class="row">
<div class="col-12">
 <p class="topp2">
 <?php
  if(isset($_SESSION['login'])){
    echo' <a class="nom" href="#"> <i class="fas fa-user"></i> '.$_SESSION['firstname'].' '.$_SESSION['firstname'].' </a>
    <div class="logout"> <a href="logout.php"> <i class="fas fa-sign-out-alt"></i> Deconnexion </a></p></div>';
  }
?>
</div>
</div>
</div>
<h2>  Commandes </h2>
<div class="container tb2">
<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
    <strong> <td> N° de commande </td></strong>
    <strong> <td> Nom </td></strong>
    <strong> <td> Adresse </td></strong>
    <strong> <td> Date </td></strong>
    <strong> <td> Total </td></strong>
    <strong> <td> Statut </td></strong>
      </tr>
    </thead>
    <tbody>
    <?php
    while($row = $res->fetch_assoc()){
      $client=$row['id_user'];
      $requser=$cart->Afficheruser($client);
      $row2 = $requser->fetch_assoc();
      $firstname=$row2['firstname'];
      $lastname=$row2['lastname'];
      echo '<tr>
        <td>'.$row['id'].'</td>
        <td>'.$firstname.' '.$lastname.' </td>
        <td>'.$row['adresse'].'</td>
        <td>'.$row['date'].'</td>
        <td>'.$row['total'].'$</td>
        <td>'.$row['statut'].'</td>
        <input type="hidden" id="custId" name="id" value="'.$row['id'].'>">
        
      </tr>';}
      ?>
    </tbody>
  </table>
</div>
</div>

<script src="../js/script2.js"></script>
</body>

</html>
