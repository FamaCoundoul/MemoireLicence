<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link href="css/header.css" rel="stylesheet"/> -->
<link href="css/login.css" rel="stylesheet"/>
<title>LOGGIN</title>
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    
 <div class="modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Page Connection</h4>
				
			</div>
			<?php if(isset($_GET['bien'])){?>
		<div class="alert alert-warning" role="alert">
		<?php echo htmlspecialchars($_GET['bien']); ?>
		</div>
		<?php }?>
		<?php if(isset($_GET['error'])){?>
		<div class="alert alert-warning" role="alert">
		<?php echo htmlspecialchars($_GET['error']); ?>
		</div>
		<?php }?>
			<div class="modal-body">
				<form action="verification/authentification.php" method="post">
					<div class="form-group">
						<i class="fa fa-user"></i>
						<input type="text" class="form-control" placeholder="Login" name="login" >
					</div>
					<div class="form-group">
						<i class="fa fa-lock"></i>
						<input type="password" class="form-control" placeholder="Password" name="password" >					
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-block btn-lg" value="Envoyer" name="envoyer">
					</div>
				</form>	
				Si vous n'avez pas de compte<a href="signup.php"  >S'inscrire</a>		
				
			</div>
			
		</div>
	 
</div>
</body>
</html>
