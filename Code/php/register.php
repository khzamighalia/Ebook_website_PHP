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
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <h4>Nouveau client?</h4>
          <h6>Je suis un nouveau client </h6>
          <div class="row nnn">
          <div class="col-md-6" >      
          <label>Nom</label><br>
          <input type="text" name="lastnamei" class="nn" required>
</div>
          <div class="col-md-6" >
          <label>Prenom</label><br>
          <input type="text" name="firstnamei" class="nn" required>
</div>
</div>    
          <label>Email</label><br>
          <input type="text" name="emaili" class="no" required><br>
          <label>Mot de passe</label><br>
          <input type="password" name="passwordi" class="no" required><br>
          <label>Répétez le mot de passe</label><br>
          <input type="password" name="password2" class="no" required>
          <button type="submit" class="btncnx" name="register" > S'INSCRIRE</button>
          <center><p>Vous n'avez pas de compte?<a href="login.php"> Inscrivez-vous </a></p>
          </center>
      </div>
</div>
</form>
      

  </div>
  

</div>

</body>
</html>
