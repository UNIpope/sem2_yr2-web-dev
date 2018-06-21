<!-- 
name: 	jack duggan
stu:	C16350866
module:	Webdevelopment and internet app
Os:		windows 10
browser:Firefox

-->



<?php include('server.php') ?>
<?php 
	
	/*
	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		//header('location: login.php');
	}
*/
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		//header("location: login.php");
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
		<a class="active" >Home</a>
		<a href="login.php">login / register</a>
		<a href="order.php">Order</a>
		<p>The chipper : we'll settle your chipping needs</p>
		
		
		<?php if (isset($_SESSION['success'])) : 
				unset($_SESSION['success']);			
		endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>
	
	
	<div class = "menu">
		<h1 align = middle>Our menu!</h1>
	</div>
	
	
		
		<div class="content">
		
			<div class="gallery">
				<img src="bag.jpg" width="300" height="200">
				</a>
				<div class="desc">
					<h3>bag of chips</h3>
					<p>price: €0.50</p>
					
					

				</div>
			</div>
			
			<div class="gallery" align = left>
				<img src="bannana.jpg" width="300" height="200">
				</a>
				<div class="desc">
					<h3>bannana chips</h3>
					<p>price: €1.00</p>
					
					

				</div>
			</div>
			
			<div class="gallery">
				<img src="choco.jpg" width="300" height="200">
				</a>
				<div class="desc">
					<h3>chocolate chips</h3>
					<p>price: €0.80</p>
					
					

				</div>
			</div>
			
			<div class="gallery">
				<img src="casino.png" width="300" height="200">
				</a>
				<div class="desc">
					<h3>casino chips</h3>
					<p>price: 15.60</p>
					
					

				</div>
			</div>
			
			
			<div class="gallery">
				<img src="micro.jpg" width="300" height="200">
				</a>
				<div class="desc">
					<h3>micro-chips</h3>
					<p>price: €9.80</p>
					
					

				</div>
			</div>
			
			<div class="gallery">
				<img src="food.jpg" width="300" height="200">
				</a>
				<div class="desc">
					<h3>chips (chips)</h3>
					<p>price: €2.20</p>
					
					

				</div>
			</div>
			
			
			<div class="gallery">
				<img src="paint.jpg" width="300" height="200">
				</a>
				<div class="desc">
					<h3>paint chips</h3>
					<p>price: €100.00</p>
					
					

				</div>
			</div>
			
			<div class="gallery">
				<img src="wood.jpg" width="300" height="200">
				</a>
				<div class="desc">
					<h3>wood chips</h3>
					<p>price: €60.0</p>
					
					

				</div>
			</div>
		</div>
		
		
		<!-- bottem bar -->
		<br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
		<br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
		<br> <br> <br> <br> <br> <br>
	
		<div class="topnav" align = middle>
			<a>Contact :  089 67288383 </a>
			<p>Email :  TheChipper@nom.ie</p>
		</div>

</body>

</html>