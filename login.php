<?php
session_start();
if(isset($_SESSION['user_id'])){
    header('Location: Vedett.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Belépés</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="login.css">
	<style>
		html{
			font-family: 'Gruppo', cursive;
		}
	</style>
	</head>
	<body class="img js-fullheight" style="background-image: url(carousel2.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Lépjen be</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">email: admin@admin.hu | jelszó: admin</h3>
		      	<form action="passwordcheck.php" class="signin-form" method="POST">
		      		<div class="form-group">
		      			<input type="email" class="form-control" name="email" placeholder="email" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" name="password" placeholder="Jelszó" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Belépés</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Emlékezzen
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Elfelejtett jelszó</a>
								</div>
	            </div>
	          </form>
	          
	          
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="jquery.min.js"></script>
  <script src="popper.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="main.js"></script>

	</body>
</html>

