<!-- 
name: 	jack duggan
stu:	C16350866
module:	Webdevelopment and internet app
Os:		windows 10
browser:Firefox

-->



<?php include('server.php') ?>
<?php
	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: index.php");
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>

<body>
	<!-- top bar -->
	 <div class="topnav">
		<a href="index.php">Home</a>
		<a href="login.php">login / register</a>
		<a class="active" >Order</a>
		<p>The chipper : we'll settle your chipping needs</p>
		
		
		<div>
			<!-- notification message -->
			<?php if (isset($_SESSION['success'])) : 
				unset($_SESSION['success']);
			?>
			<?php endif ?>

			<!-- logged in user information -->
			<?php  if (isset($_SESSION['username'])) : ?>
				<a href="index.php?logout='1'" style="color: red;">logout</a> </p>
			<?php endif ?>
			
		</div>
	</div>
	
	<div class = "menu">
		<h1 align = middle>Order your stuff!</h1>
	</div>
		
	<div class="content">
		<form method="post" action="index.php">
		
			<div class="gallery">
				
				
				<img src="bag.jpg" width="300" height="200">
				</a>
				<div class="desc">
					<h3>bag of chips</h3>
					<p>price: €0.50</p>
					
					<label for="bagq">quantity :</label>
					<input type="number" name="bagq" value = "0"><br>
					<label for="bag">check if u want :</label> <br>
					<input type="checkbox" name="bag">

				</div>
			</div>
			
			<div class="gallery" align = left>
				<img src="bannana.jpg" width="300" height="200">
				</a>
				<div class="desc">
					<h3>bannana chips</h3>
					<p>price: €1.00</p>
					
					<label for="bannanaq">quantity :</label>
					<input type="number" name="bannanaq" value = "0"><br>
					<label for="bannana">check if u want :</label> <br>
					<input type="checkbox" name="bannana">

				</div>
			</div>
			
			<div class="gallery">
				<img src="choco.jpg" width="300" height="200">
				</a>
				<div class="desc">
					<h3>chocolate chips</h3>
					<p>price: €0.80</p>
					
					<label for="chocoq">quantity :</label>
					<input type="number" name="chocoq" value = "0"><br>
					<label for="choco">check if u want :</label> <br>
					<input type="checkbox" name="choco">

				</div>
			</div>
			
			<div class="gallery">
				<img src="casino.png" width="300" height="200">
				</a>
				<div class="desc">
					<h3>casino chips</h3>
					<p>price: 15.60</p>
					
					<label for="casinoq">quantity :</label>
					<input type="number" name="casinoq" value = "0"><br>
					<label for="casino">check if u want :</label> <br>
					<input type="checkbox" name="casino">

				</div>
			</div>
			
			
			<div class="gallery">
				<img src="micro.jpg" width="300" height="200">
				</a>
				<div class="desc">
					<h3>micro-chips</h3>
					<p>price: €9.80</p>
					
					<label for="microq">quantity :</label>
					<input type="number" name="microq" value = "0"><br>
					<label for="micro">check if u want :</label> <br>
					<input type="checkbox" name="micro">
					
				</div>
			</div>
			
			<div class="gallery">
				<img src="food.jpg" width="300" height="200">
				</a>
				<div class="desc">
					<h3>chips (chips)</h3>
					<p>price: €2.20</p>
					
					<label for="chipsq">quantity :</label>
					<input type="number" name="chipsq" value = "0"><br>
					<label for="chips">check if u want :</label> <br>
					<input type="checkbox" name="chips">

				</div>
			</div>
			
			
			<div class="gallery">
				<img src="paint.jpg" width="300" height="200">
				</a>
				<div class="desc">
					<h3>paint chips</h3>
					<p>price: €100.00</p>
					
					<label for="paintq">quantity :</label>
					<input type="number" name="paintq" value = "0"><br>
					<label for="paint">check if u want :</label> <br>
					<input type="checkbox" name="paint">

				</div>
			</div>
			
			<div class="gallery">
				<img src="wood.jpg" width="300" height="200">
				</a>
				<div class="desc">
					<h3>wood chips</h3>
					<p>price: €60.0</p>
							
					<label for="woodq">quantity :</label>
					<input type="number" name="woodq"  value = "0"><br>
					<label for="wood">check if u want :</label> <br>
					<input type="checkbox" name="wood">
					
				</div>
			</div>
			
			<br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
			<br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
			<br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
			<br> <br> <br> <br>
			
			<div align =  "center">
				<input class = "enter" type="submit" name = "add" value = "submit">
			</div>
			
		</form>
	</div>
	
		
	<br> 
		
	<!-- bottem bar -->
	<div class="topnav" align = middle>
		<a>Contact :  089 67288383 </a>
		<p>Email :  TheChipper@nom.ie</p>
	</div>
	
		
</body>
</html>