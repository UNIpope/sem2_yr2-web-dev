<!-- 
name: 	jack duggan
stu:	C16350866
module:	Webdevelopment and internet app
Os:		windows 10
browser:Firefox

-->


<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style--.css">
</head>
<body>
	<!-- top bar -->
	<div class="topnav">
		<a href="index.php" >Home</a>
		<a class ="active">login / register</a>
		<a href="order.php">Order</a>
	</div>
	
	
	<div class = "menu">
		<h1 align = middle>Register</h1>
	</div>
	
	<!-- register form -->
	<form method="post" action="register.php">
			
		<label>Username</label>
		<input type="text" name="username" required/>
			
		<br>
		
		<label>Email</label>
		<input type="email" name="email" required/>
			
		<br>
		
		<label>Password</label>
		<input type="password" name="password_1" required/>
			
		<br>
		
		<label>Confirm password</label>
		<input type="password" name="password_2" required/>
		
	
		<button type="submit" class = "enter" name="reg_user">Register</button>
		
		<p>Already a member? 
		<a href="login.php">Sign in</a></p>
	</form>
</body>
</html>