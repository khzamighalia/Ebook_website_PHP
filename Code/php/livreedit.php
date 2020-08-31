<?php
include "../Classes/livre.php";
session_start();
$id=$_GET['id'];
if(!$_SESSION['login']) 
header("Location: login.php");
else {
 $liv=new livre();
 $result=$liv->AfficheLivre($id);
$row = $result->fetch_assoc();
if (isset($_POST['modlivre'])) {
	if(!empty($_FILES)){
		$file = $_FILES['modimg'];
		$fileName = $_FILES['modimg']['name'];
		$fileTmpName = $_FILES['modimg']['tmp_name'];
		$fileSize = $_FILES['modimg']['size'];
		$fileError = $_FILES['modimg']['error'];
		$fileType = $_FILES['modimg']['type'];
		$fileExt = explode('.',$fileName);
		$fileActualExt = strtolower(end($fileExt));
		$allowed = array('jpg','jpeg','png','pdf');
		$img= "images/".$fileName."";
		if(in_array($fileActualExt, $allowed)){
			   $fileNameNew = uniqid('',true).".".$fileActualExt;
			   $fileDestination = '../images/'.$fileName;
			   move_uploaded_file($fileTmpName, $fileDestination);
	$result2=$liv->modLivre2($_POST['id'],$_POST['modtitre'],$_POST['modauteur'],$img,$_POST['modcategorie'],$_POST['modlangue'],$_POST['modstock']);}
	
}
else{
	$result2=$liv->modLivre($_POST['id'],$_POST['modtitre'],$_POST['modauteur'],$_POST['modcategorie'],$_POST['modlangue'],$_POST['modstock']);}
}
	header("location:dashbord.php?uploadsuccess");
	

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
<center> <h1> Modifier un livre </h1></center> 
<!-- <div id="booking" class="section"> -->
		<div class="section-center"  style="margin-left : 20%;">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-offset-1">
						<div class="booking-form">
							<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
								<div class="row">
                                <input type="hidden" name="id"  value="<?php echo $row['id'];?>" >
								<input type="hidden" name="oldimg"  value="<?php echo $row['img'];?>" >
									<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">titre</span>
											<input type="text" name='modtitre' id='modtitre' class="form-control" value="<?php echo $row['titre'];?>"  required >
										</div>
									</div>
</div>
									<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">image</span>
											<input class="form-control" name="modimg" id="modimg" value="../<?=$row['img']?>" type="file"> 
										</div>
									</div>
								</div>
								<div class="row">
								<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">Auteur</span>
											<input type="text" name='modauteur' id='modauteur' class="form-control" value="<?php echo $row['auteur'];?>"  required >
										</div>
									</div>
                                <div>

									<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">Catégorie</span>
											<input class="form-control" name="modcategorie" id="modcategorie" type="text" value="<?php echo $row['categorie'];?>" required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">Langue</span>
											<input class="form-control" name="modlangue" id="modlangue" type="text" value="<?php echo $row['langue'];?>" required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">Prix</span>
											<input class="form-control" name="modprix" id="modprix" type="text" value="<?php echo $row['prix'];?>" required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">Stock</span>
											<input class="form-control" name="modstock" id="modstock" type="text" value="<?php echo $row['stock'];?>" required>
										</div>
									</div>
									
								</div>
								<div class="form-btn">
									<button type="submit" name="modlivre" id="modlivre" style="border:none; margin-bottom : 50px" class="submit-btn btn-primary btn-lg btn-block">
										Valider
									</button>




								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer>
           <div class="container-fluid">
           <center> <h4>DataInsight-Services@2020</h4> </center>
</div>
</footer>
   
    </body>
    </html>
