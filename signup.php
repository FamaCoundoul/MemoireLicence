<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--<link href="css/header.css" rel="stylesheet"/> -->
<link href="css/signup.css" rel="stylesheet"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Signup</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
<?php include("db/connexion.php");?>
 
<div class="signup-form">
    <form action="verification/signup.php" method="post" enctype="multipart/form-data">
		<h2>Page Inscription</h2>
		
		<?php if(isset($_GET['error'])){?>
		<div class="alert alert-warning" role="alert">
		<?php echo htmlspecialchars($_GET['error']); ?>
		</div>
		<?php }
		     if(isset($_GET['nom'])){
              $nom=$_GET['nom'];
			 }else{
              $nom='';
			 }
			 if(isset($_GET['prenom'])){
				$prenom=$_GET['prenom'];
			   }else{
				$prenom='';
			   }
		 ?>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="nom" placeholder="Nom" value="<?=$nom?>">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="prenom" placeholder="Prenom" value="<?=$prenom?>" >
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
				<input type="email" class="form-control" name="login" placeholder="Numero de carte" >
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				<input type="text" class="form-control" name="password" placeholder="Password" >
			</div>
        </div>
		
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg" name="inscrire">S'nscrire</button>
        </div>
		<div class="text-center">Avez-vous un compte?Si oui <a href="login.php">Connectez-vous</a></div>
    </form>
	
	
</div>


<!--                            Traitement de la page inscription                    -->   

 



</body>
</html>