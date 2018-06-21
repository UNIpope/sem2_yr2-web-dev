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
		<a href="order.php" >Order</a>
		<p>The chipper : we'll settle your chipping needs</p>
		
		
		<div>
			<!-- log out  -->
			<?php  if (isset($_SESSION['username'])) : ?>
				<a href="index.php?logout='1'" style="color: red;">logout</a> </p>
			<?php endif ?>	
		</div>
	</div>
	
	<div class = "menu">
		<h1 align = middle>Please confirm your order!</h1>
	</div>
		
	<div class = "content">
		<?php
		
		//query for printing ordered stuff
		$query = "SELECT * FROM `order_` 
		WHERE `check_` = 'on' ";
			
		if (!mysqli_query($db,$query)){
			die('Error: '. mysqli_error($db));
		}
		else{
			$result = mysqli_query($db, $query);		
			
			//print table of results 
			printf("Your order: \n");
			echo "<table>"; // start table
			
			while($row = mysqli_fetch_array($result)){
				echo "<tr><td>" . $row['name'] . "</td><td>" . $row['quantity'] . "</td></tr>"; 
			}
			
			echo "</table>"; //Close table
		}//end results
		?>
		
		<!-- form to "order" -->
		<form>
			<input class = "enter" type="submit"  name="confirm" value="confirm"> 
		</form>
			
	</div>	
	
	<!-- bottem bar -->
	<br>
	
	<div class="topnav" align = middle>
		<a>Contact :  089 67288383 </a>
		<p>Email :  TheChipper@nom.ie</p>
	</div>
	
		
</body>
</html>