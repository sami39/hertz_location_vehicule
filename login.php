<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
	<title>Login Page</title>
	<!--Made with love by Mutiullah Samim -->

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
		integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3 style="color: #FFC312;">Hertz</h3>
					<div class="d-flex justify-content-end social_icon">
						<span><i class="fab fa-facebook-square"></i></span>
						<span><i class="fab fa-google-plus-square"></i></span>
						<span><i class="fab fa-twitter-square"></i></span>
					</div>
				</div>
				<div class="card-body">
					<form method="GET">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control" placeholder="username">

						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control" placeholder="password">
						</div>
						<div class="row align-items-center remember">
							<input type="checkbox">Remember Me
						</div>
						<div class="form-group">
							<input type="submit" name="submit" value="Login" class="btn float-right login_btn">
						</div>
					</form>
				</div>
			
				
			</div>
		</div>
	</div>
	<?php
  try {
	$db = new PDO('mysql:host=localhost;port=3306;dbname=hertz','root','');
	}
catch (PDOException $e) {
	print "Erreur !: " . $e->getMessage() . "<br/>";
	die();
}

if(isset($_GET['submit']) && $_GET['submit']=="Login" && !empty($_GET['username']) && !empty($_GET['password'])){


	$modifier = $db->prepare('SELECT * FROM `login` WHERE user=:identifiant AND pass=:motdepasse');
	$modifier->bindParam(':identifiant', $_GET['username'], PDO::PARAM_STR);
	$modifier->bindParam(':motdepasse', $_GET['password'], PDO::PARAM_STR);

	 $modifier->execute();
	$modifier=$modifier->fetch(PDO::FETCH_ASSOC);
	//$modifier->debugDumpParams();
	//die;
	   if(is_array($modifier)){
		header("location:admin.php");
		
	   
	   } else {
		   echo "<font color='red'> Veuillez recommencer svp, une erreur est survenue</font>";
	   }

}
?>

</body>

</html>