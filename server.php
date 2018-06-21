<!-- 
name: 	jack duggan
stu:	C16350866
module:	Webdevelopment and internet app
Os:		windows 10
browser:Firefox

-->




<?php 
	session_start();

	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'dt211');
	
	//check con
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MYSQL: ". mysqli_connect_errno($db);
	}

	// REGISTER USER
	if (isset($_POST['reg_user'])) {

		// register user or error 
		if ($_POST['password_1'] == $_POST['password_2']) {	
		
			//insert query
			$query = "INSERT INTO user (username, email, Password) 
			VALUES
			('$_POST[username]','$_POST[email]', '$_POST[password_1]')";
			
			//run query and check
			if (!mysqli_query($db,$query))
			{
				die('Error: '. mysqli_error($db));

			}
			else{
				//update session and return to main pg
				$_SESSION['username'] = $_POST[username];
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}
		}
		else
		{
			echo "passwords dont match";
		}//end if

	}
	
	// LOGIN USER
	if (isset($_POST['login_user'])) {
		//select usernames and pass.
		$query = "SELECT * FROM user
		WHERE 
		username='$_POST[username]' AND Password='$_POST[password]'";
		
		//run query 
		if (!mysqli_query($db,$query)){
			die('Error: '. mysqli_error($db));
		}
		else{
			//if there are results count no of results
			if($results = mysqli_query($db, $query)){
				$rowcount=mysqli_num_rows($results);
					
				//check if there is a result
				if ($rowcount == 1) {
					//match log user in
					$_SESSION['username'] = $_POST['username'];
					$_SESSION['success'] = "You are now logged in";
					header('location: index.php');
				}else {
					printf("the username and password do not match");
				}//end count
			}//end results
		}//end if my sql query 		
	}//end login user
	
	
	// ADD FOOD
	if (isset($_POST['add'])) {
		
		//bag of
		$query = "INSERT INTO order_ (name, check_, quantity) 
		VALUES
		('bag of chips', '$_POST[bag]', '$_POST[bagq]')";
					  
		if (!mysqli_query($db,$query))
		{
			die('Error: '. mysqli_error($db));
		}
		//end query 
		
		//bannana
		$query = "INSERT INTO order_ (name, check_, quantity) 
		VALUES
		('bannana chips', '$_POST[bannana]', '$_POST[bannanaq]')";
					  
		if (!mysqli_query($db,$query))
		{
			die('Error: '. mysqli_error($db));
		}
		//end query 
		
		//choco
		$query = "INSERT INTO order_ (name, check_, quantity) 
		VALUES
		('chocolate chips', '$_POST[choco]', '$_POST[chocoq]')";
					  
		if (!mysqli_query($db,$query))
		{
			die('Error: '. mysqli_error($db));
		}
		//end query 
		
		//casino 
		$query = "INSERT INTO order_ (name, check_, quantity) 
		VALUES
		('casino chips', '$_POST[casino]', '$_POST[casinoq]')";
					  
		if (!mysqli_query($db,$query))
		{
			die('Error: '. mysqli_error($db));
		}
		//end query 
		
		//micro
		$query = "INSERT INTO order_ (name, check_, quantity) 
		VALUES
		('micro chips', '$_POST[micro]', '$_POST[microq]')";
					  
		if (!mysqli_query($db,$query))
		{
			die('Error: '. mysqli_error($db));
		}
		//end query 
		
		//chip chips
		$query = "INSERT INTO order_ (name, check_, quantity) 
		VALUES
		('chip chips', '$_POST[chips]', '$_POST[chipsq]')";
					  
		if (!mysqli_query($db,$query))
		{
			die('Error: '. mysqli_error($db));
		}
		//end query 
		
		//paint 
		$query = "INSERT INTO order_ (name, check_, quantity) 
		VALUES
		('paint chips', '$_POST[paint]', '$_POST[paintq]')";
					  
		if (!mysqli_query($db,$query))
		{
			die('Error: '. mysqli_error($db));
		}
		//end query 
		
		//wood
		$query = "INSERT INTO order_ (name, check_, quantity) 
		VALUES
		('wood chips', '$_POST[wood]', '$_POST[woodq]')";
					  
		if (!mysqli_query($db,$query))
		{
			die('Error: '. mysqli_error($db));
		}
		//end query 
		

		header('location: confirm.php');
	}
	
	//order your stuff
	if (isset($_GET['confirm'])) {
		
		//delete all form order
		//this should be replaced with actual order suff if actual web
		$query = "DELETE FROM `order_` WHERE 0 = 0";
							  
		if (!mysqli_query($db,$query))
		{
			die('Error: '. mysqli_error($db));

		}else{
			//return to main page
			header('location: index.php');
		}
	}

?>