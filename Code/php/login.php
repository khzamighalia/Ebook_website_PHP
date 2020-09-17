<?php  
  include "login-back.php";
?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Wisdom </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>
<body>
 
<div class="container-fluid auth" >
  <div class="row">
    <div class="col-md-6 auth2" >
    <div class="insdiv">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <center>
          <h4>Déjà Client?</h4>
          <h6>Je suis déjà un client </h6>
          <label>Email</label><br>
          <input type="text" name="email" id="email" class="no" required> <br>
          <label>Mot de passe</label><br>
          <input type="password" name="password" id="pass" class="no" required><br>
          <button type="submit" class="btncnx" name="log" > CONNEXION</button><br>
          <p>Vous n'avez pas de compte?<a href="register.php"> Inscrivez-vous </a></p>
          </center>
</form>
      </div>
    </div>
    </div>
</div>
</body>
</html>
