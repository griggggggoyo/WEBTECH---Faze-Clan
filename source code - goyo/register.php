
<html>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	
	
	
	<input type="submit" name = "submit"> <br><br>
	<br>

	Username : <input type="text" name="username"><br>
	<br>
	E-mail: <input type="text" name="email" > <br>
	<br>
	Password : <input type="text" name="pass"><br>
	<br>
	Confirm Password : <input type="text" name="repass"><br>
	<!-- Unit Price : <br><input type="text" name="prPrice" placeholder="0.00"> -->
	<br>
	</form>
</html>

<?php
	//echo "<script type='text/javascript'>alert('$msg');</script>";

	$PUser = "Gregoyo";
	$PEmail = "gregoyo98@gmailcom";
	$PPass = "asdf";
	$PPass_2 = "asdf";


	function validUserName($Pusername){
		$dbc=mysqli_connect('localhost','root','DBlifeAF_1','gamesdoi');
		$getUser = $dbc->query("SELECT * 
								FROM user
								WHERE  userName = '$Pusername'");
		$fetchUser = mysqli_fetch_array($getUser);

		$tempuserID = null;

		foreach($getUser as $fetchUser){
			$tempuserID = $fetchUser['userID'];
			$temppass = $fetchUser['passWord'];
		}

		$checker = 'true';
		if($tempuserID != null){
			$checker = 'false' ;
		}

		//echo  $checker;
		return $checker;
	}

	//echo '<br>'. validUserName($_POST["username"]). ' <br >';
	

	// If Username is empty
	if(empty($_POST["username"])){ 
		echo 'Username must  not be empty!!<br>';
	}

	// If Email is empty
	if(empty($_POST["email"])){ 
		echo 'Email must  not be empty!!<br>';
	}

	// If Password is empty
	if(empty($_POST["pass"])){ 
		echo 'Password must  not be empty!!<br>';
	}

	// If Confirm Password is empty
	if(empty($_POST["repass"]) && !empty($_POST["pass"])){ 
		echo 'Please confirm password!!<br>';
	}



	// checks if Password and Confirm-Pass are equal
	if(!empty($_POST["repass"]) && !empty($_POST["pass"]) && $_POST["repass"] != $_POST["pass"]){
		echo 'Passwords do not match!!<br>';
	}


	// checks if the inputted Username already exists
	if(validUserName($_POST["username"]) == 'false'){
		echo 'Username: '. $_POST["username"]. ' already exists!! Please make another one.<br>';
		
	}

	echo strlen($_POST["pass"]);


?>