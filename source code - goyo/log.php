<?php
	//echo "<script type='text/javascript'>alert('$msg');</script>";

	$PUser = "gregoyo";
	$PPass = "rekt";


	function getUserID($PuserName){
		$dbc=mysqli_connect('localhost','root','DBlifeAF_1','gamesdoi');

		$getUser = $dbc->query("SELECT * 
								FROM user
								WHERE  userName = '$PuserName'");
		$fetchUser = mysqli_fetch_array($getUser);


		$tempuserID = null;


		foreach($getUser as $fetchUser){
			$tempuserID = $fetchUser['userID'];
			$temppass = $fetchUser['passWord'];
		}
		return $tempuserID;
	}

	$testUserID = getUserID($PUser);
	echo 'Found user ID: '. $testUserID. '<br>';

	if($tempuserID == null){
		echo 'User Account does not exist!!';	
	}

	
	if($testUserID != null){
		
		$_SESSION["userID"] = $testUserID ;
		echo '---> User ID: '. $_SESSION["userID"] . '<br>';

		if($PPass == $temppass){
			echo'Password is correct!!';
		}

		if($PPass != $temppass){
			echo'Incorrect password!!';
		}

		
	}

?>