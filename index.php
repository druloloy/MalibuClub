<?php
	include('config.php');
	session_start();

	
?>



<!DOCTYPE html>
	<html lang="en">
		<head>
			<title>Welcome to Malibu Club</title>
		
		<!--METADATA-->
				<meta charset="utf-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1.0" />
				<meta http-equiv="X-UA-Compatible" content="IE=edge" />
				<meta name="Author" content="Andrew Loloy" />
				<meta name="description" content="This chat room was created due to boredomness" />
				<meta name="keywords" content="chat,explore,friends,room,malibu,club" />

		<!--style plugins-->
				<link rel="stylesheet" type="text/css" href="styles/style.css">
		</head>
<body>

	<header>
		<div class="container">
			<a href="index.php"><img src="res/logo.png" alt="Malibu Club" id="logo"></a>
				<form method="POST">
					<input type="Textbox" name="username"  placeholder="Username" />
					<input type="password" name="password" placeholder="Password"/>

					<button type="submit">Login</button>
				</form>
		</div>
	</header>
	<main>
		<div class="container">
			<h1><span>Get in Touch,</span> Anywhere.</h1>


			<form action="signup.php" method="POST">
				<h2><span>Sign</span> Up</h2>
				
					<input type="Textbox" name="firstName" onkeypress="return validateForm(event,this.value,25)"  placeholder="First Name" required="true" /> 
					<input type="Textbox" name="lastName" onkeypress="return validateForm(event,this.value,25)"  placeholder="Last Name" required="true" />
					<input type="email" name="email" onkeypress="return validateForm(event,this.value,50)"  placeholder="Email"  required="true" />
					<input type="password" name="passwordSignUp"  placeholder="Password" required="true" />
					<input type="password" name="passwordSignUpConfirm" onkeypress="passwordConfirmation(event,this.value)"  placeholder="Confirm Password" required="true" />

					<button type="submit">Create Account</button>
			</form>
		</div>
	</main>

	<script src="js/formChecker.js"></script>
</body>
</html>