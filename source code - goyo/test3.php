<?php
	//echo "<script type='text/javascript'>alert('$msg');</script>";

	$PUser = "	";
	$PPass = " ---";

	function containsWord($input_string) {
	  foreach (explode(' ', $input_string) as $word) {
	    if (!empty($word)) {
	      return 'true';
	    }
	  }
	  return 'false';
	}


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

		echo  $checker.'<br>';
	}

	
	//echo validUserName($PUser). '<br>';


	if($tempuserID == null){
		echo 'User Account does not exist!!<br>';	
	}

	//validUserName($PUser);

	echo '<br>String contains word: '. containsWord($PUser). '<br>';

	// echo strlen("Hello");
	$tst = 'Hello ';
	echo 'String length of '.$tst. ' is: '. strlen($tst);


?>