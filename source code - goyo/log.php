

<!DOCTYPE html>
<html>
	<body>


		<h1> Astr
		</html>

		<html>aea
		</h1>


	</body>
</html>



<?php
	//echo "<script type='text/javascript'>alert('$msg');</script>";

	$PUser = "shuppet";
	$PPass = "rekt";

	$t1 = "Pass";
	$t2 = "Pass";

	$test = strcasecmp("PaSs", "Pass");
	echo $test.'<br>';

	

	function insertIntoDB($gameID, $gName, $gDesc, $genre, $gUrl){
		/*
		$auditTable_query = "INSERT INTO AUDIT_TABLE(batchID, quantity, status, dateTime, currentQuantity)
				VALUES($temp_batchID_at, $temp_ret, 8, '$tempDate', $temp_quant)";
				$insert_audit = mysqli_query($dbc, $auditTable_query);
		*/
		$dbc=mysqli_connect('localhost','root','DBlifeAF_1','gamesdoi');

		$addGame_query = "	INSERT INTO game(gameID, gameName, gameDescription, genreID, gameVidURLHolder)
							VALUES($gameID, '$gName', '$gDesc', $genre, '$gUrl')";
		$insert_game = mysqli_query($dbc, $addGame_query);
	}

	insertIntoDB(1, "Buishock", "man choose", 1, "fb.com");


	function getUserID($PuserName){
		$dbc=mysqli_connect('localhost','root','DBlifeAF_1','gamesdoi');

		$getUser = $dbc->query("SELECT * 
								FROM user
								WHERE  userName = '$PuserName'");
		$fetchUser = mysqli_fetch_array($getUser);


		$tempuserID = null;


		foreach($getUser as $fetchUser){
			$tempuserID = $fetchUser['userID'];
			//$temppass = $fetchUser['passWord'];
		}
		return $tempuserID;
	}


	function showPassword($PuserID){
		$dbc=mysqli_connect('localhost','root','DBlifeAF_1','gamesdoi');

		$getPass =  $dbc->query("SELECT *
								 FROM user
								 WHERE userID=$PuserID");
		$fetchPass = mysqli_fetch_array($getPass);

		$tempPass = null;
		foreach($getPass as $fetchPass){
			$tempPass = $fetchPass['passWord'];
		}
		return $tempPass;
	}


	$testUserID = getUserID($PUser);
	echo 'Found user ID: '. $testUserID. '<br>';

	if($tempuserID == null){
		echo 'User Account does not exist!!';	
	}

	
	if($testUserID != null){
		
		$_SESSION["userID"] = $testUserID ;
		echo '---> User ID: '. $_SESSION["userID"] . '<br>';

		$checkPass = showPassword($testUserID);
		echo "<script type='text/javascript'>alert('$userID, password: $checkPass');</script>";
		/*
		if($PPass == $temppass){
			echo'Password is correct!!';
		}

		if($PPass != $temppass){
			echo'Incorrect password!!';
		}
	*/
		
	}

?>