
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  This is an alert box.
</div>
<?php
	
	//$_SESSION["userID"]


	if(isset($_SESSION["msg_username"])){

	}


?>


<html>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			Username : <input type="text" name="username"><br>
			Password : <input type="text" name="pass"><br><br>

			<input type="submit" name = "add" value = "Add">
			<input type="submit" name = "clear" value = "Clear">
			<input type="submit" name = "submit">

		</form>
		
<a href="test2.php">Exia</a>

	</body>
</html>
	
<?php

	// checks if string from fields has contains at least one non-space
	function containsWord($input_string) {
	  // return false when letters/characters are absen
	  // return true when a character/letter is found
 
	  foreach (explode(' ', $input_string) as $word) {
	    if (!empty($word)) {
	      return 'true';
	    }

	  }

	  return 'false';
	}


	if(isset($_POST['login'])){
		//header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/test.html");
	}


	//test adding
	if(isset($_POST['add'])){

	}

	//test content placing placeholder
	if(isset($_POST['clear'])){

	}


	// test submitting / registering
	if(isset($_POST['submit'])){
		
		if(containsWord($_POST["username"]) == 'true'){
			echo "<script type='text/javascript'>alert('------- Kilroy was CONTAINED -------');</script>";
			//header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/test3.php");
		}

		if(containsWord($_POST["username"]) == 'false'){
			echo "<script type='text/javascript'>alert('------- Kilroy is NOT contained  -------');</script>";
			//header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/test3.php");
		}

		
	}


	$x1 = 'Go yo'; $x2 = 'Go_yo';
	echo '<br> x1: '.$x1.'; x2: '. $x2. '<br>';

	if($x1 == $x2){
		echo 'MATCH <br>';
	}

	if($x1 != $x2){
		echo 'Not a MATCH <br>';
	}



	function hasSpace($Ppass){
		$cmpr = preg_match('/\s/',$Ppass);
		// 1 == HAS space;
		// 0 == NO space

		if($cmpr == 1){
			$checker = 'true';
		}


		if($cmpr == 0){
			$checker = 'false';
		}

		return $checker;
	}


	$foo = "Dave Smith";
	$bar = "SamSpade";
	$baz = "Dave\t\t\tSmith";

	echo preg_match('/\s/',$foo). '<br>';
	echo var_dump(preg_match('/\s/',$bar)). '<br>';
	echo var_dump(preg_match('/\s/',$baz)). '<br> <br>';

	$tester = 'Thisisasentence';
	echo '$tester has space? '. hasSpace($tester). '<br>';

	//echo 'length: '.strlen("Hel 		lo");
	echo 'length: '.strlen($_POST["username"]). '<br><br>';

	echo '< ------- ------- > <br> <br>';


	$string = 'foos';
	echo preg_match('/[\^£$%&*()}{@#~?><>,|=_+¬-]/', $string);

	if (preg_match('/[\^£$%&*()}{@#~?><>,|=_+¬-]/', $string)){
	    // one or more of the 'special characters' found in $string
	}


	// checks if string has special characters
	function checkSpecial($Pstring){
		$cmpr = preg_match('/[\^£$%&*()}""{@#~?><>,|=_+¬-]/', $Pstring);
		// 1 -> 'true' if contains
		// 0 -> 'false' if NOT contains


		if($cmpr == 1){
			$checker = 'true';
		}

		if($cmpr == 0){
			$checker = 'false';
		}

		return $checker;
	}

	$strang = 'drank"';
	echo '<br><br>'. checkSpecial($strang);


?>
