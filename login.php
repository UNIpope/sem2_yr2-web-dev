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
	<title>Login</title>
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
		<h1 align = middle>Login</h1>
	</div>
	
	<!-- login form -->
	<form method="post" action="login.php">
	
			<label>Username</label>
			<input type="text"  name="username" required/>
		
			<br>
		
			<label>Password</label>
			<input type="password"  name="password" required/>
			
			<br> <br>
		
			<button type="submit" class = "enter"  name="login_user">Login</button>
		
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>


</body>
</html>