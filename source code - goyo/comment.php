<?php
	//echo "<script type='text/javascript'>alert('$msg');</script>";



	/*
		- https://stackoverflow.com/questions/1161708/php-detect-whitespace-between-strings
		1 = true
		0 = false

		$foo = "Dave Smith";
		$bar = "SamSpade";
		$baz = "Dave\t\t\tSmith";

		var_dump(preg_match('/\s/',$foo));
		var_dump(preg_match('/\s/',$bar));
		var_dump(preg_match('/\s/',$baz));
	*/



	// checks if comment has at least one letter/word
	function containsWord($Pcomment) {
	  foreach (explode(' ', $input_string) as $word) {

	    if (!empty($word)) {
	      return 'true';
	    }

	  }

	  return 'false';
	}



	// checks if password has SPACE or TAB
	function containsSpace($Ppass){
		$checker = preg_match('/\s/',$Ppass);
		// 1 = contains space/tab
		// 0 = DOES NOT contain space/tab

		return $checker;
	}


		$foo = "Dave Smith";
		$bar = "SamSpade";
		$baz = "Dave\t\t\tSmith";

		$Pass = 'Ta_ngo';

		echo var_dump(preg_match('/\s/',$foo)). '- ';
		echo var_dump(preg_match('/\s/',$bar)). '- ';
		echo var_dump(preg_match('/\s/',$baz));

		echo '<br>';
		///echo containsSpace($Pass);
		echo '<br>Pass length : '. strlen($Pass). '<br><br>';


		// if entered password has Space/Tab
		if(containsSpace($Pass) == 1){
			echo 'Entered password contains space/tab!!! <br>';
		}

		// if entered password DOES NOT contain Space/Tab
		if(containsSpace($Pass) == 0){
			echo 'Password is valid! <br>';
		}

		// if password length is shorter than 9
		if(strlen($Pass) < 8){
			$errors['field_name'] = "Field Name is too short, minimum is 9 characters (20 max).";
			echo $errors['field_name'];
		}

		if(strlen($Pass) >= 8){
			echo 'Password length, long enough!<br>';
		}


		// Entering new comment into DB [via current review ID]
		$temp_reviewID = 1;
		$temp_comment = "I am saying something here";
		
?>