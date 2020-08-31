<?php
include "../Classes/livre.php";
session_start();
if(!$_SESSION['login']) 
header("Location: login.php");
else {
 $liv=new livre();
if (isset($_POST['ajoutlivre']) && !empty($_FILES)) {
		$file = $_FILES['img'];
		$fileName = $_FILES['img']['name'];
		$fileTmpName = $_FILES['img']['tmp_name'];
		$fileSize = $_FILES['img']['size'];
		$fileError = $_FILES['img']['error'];
		$fileType = $_FILES['img']['type'];
		$fileExt = explode('.',$fileName);
		$fileActualExt = strtolower(end($fileExt));
		$allowed = array('jpg','jpeg','png','pdf');
		$img= "images/".$fileName."";
		if(in_array($fileActualExt, $allowed)){
			   $fileNameNew = uniqid('',true).".".$fileActualExt;
			   $fileDestination = '../images/'.$fileName;
			   move_uploaded_file($fileTmpName, $fileDestination);
	$result=$liv->ajoutLivre($_POST['titre'],$_POST['auteur'],$img,$_POST['categorie'],$_POST['langue'],$_POST['prix'],$_POST['stock']);
	if($result){
	header("location:dashbord.php?uploadsuccess");
	}
	else{
		var_dump($result);
	// header("location:ajoutlivre.php?uploadfailed");
}

    }
}
}
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wisdom </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
 <link rel="stylesheet" href="../css/style3.css"/>
</head>
<body>
<center> <h1> Ajouter un livre </h1></center> 
<!-- <div id="booking" class="section"> -->
		<div class="section-center"  style="margin-left : 20%;">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-offset-1">
						<div class="booking-form">
							<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
								<div class="row">
                                <input type="hidden" name="id"  value="<?php echo $row['id'];?>" >
									<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">titre</span>
											<input type="text" name='titre' id='titre' class="form-control" required >
										</div>
									</div>
</div>
									<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">image</span>
											<input class="form-control" name="img" id="img" type="file" required>
										</div>
									</div>
								</div>
								<div class="row">
								<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">Auteur</span>
											<input type="text" name='auteur' id='auteur' class="form-control" required >
										</div>
									</div>
                                <div>

									<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">Catégorie</span>
											<input class="form-control" name="categorie" id="categorie" type="text"  required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">Langue</span>
											<input class="form-control" name="langue" id="langue" type="text"  required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">Prix</span>
											<input class="form-control" name="prix" id="prix" type="text"  required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">Stock</span>
											<input class="form-control" name="stock" id="stock" type="text" required>
										</div>
									</div>
									
								</div>
								<div class="form-btn">
									<button type="submit" name="ajoutlivre" id="ajoutlivre" style="border:none; margin-bottom : 50px" class="submit-btn btn-primary btn-lg btn-block">
										Valider
									</button>




								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
   
    </body>
    </html>
