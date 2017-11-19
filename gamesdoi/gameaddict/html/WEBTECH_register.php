<!doctype html>
<html lang="en-US">
	
<!-- Mirrored from skywarriorthemes.com/gameaddict/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Oct 2017 09:33:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>GAMESDOI | Register</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="shortcut icon" href="img/favicon.png">
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/layerslider.css">
		<link href="css/menubar.css" rel="stylesheet">
		        <!-- picker styles -->
        <link rel="stylesheet" href="colorstyles/picker.css" type="text/css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="background1" href="colorstyles/background1.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="background2" href="colorstyles/background2.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="background3" href="colorstyles/background3.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="background4" href="colorstyles/background4.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="background5" href="colorstyles/background5.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="background6" href="colorstyles/background6.css" />
          <!-- end picker styles -->
		<link rel="stylesheet" id="custom-style-css"  href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700italic,700,800,800italic" type="text/css" media="all" />
		<!--
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
		-->
	</head>
	<body class="home page page-id-26 page-template page-template-tmp-no-title-php">
		<div id="main_wrapper">
		          <!--start picker -->

</div>
<!--end picker -->
		<div class="container logo">
			<!-- Logo -->
			<a class="brand" href="WEBTECH_index.php">
			<img src="img/logo.png" alt="logo"  />
			</a>
			<!-- End Logo -->
			<!-- Social logos -->
			
			<div class="social">
				<h3 class="normal"><a href="WEBTECH_login.php">LOGIN</a> |<a href="WEBTECH_register.php">REGISTER</a></h3>
			</div>

			<!-- End Social logos -->
			
		</div>
		<!-- NAVBAR -->
		
		<div class="page normal-page container">

		<div class="block block-contactform_block span12 first cf">
			<div class="title-wrapper">
				<h3 class="widget-title">register an account</h3>
					<div class="clear"></div>
				</div>
					<div class="mcontainer">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactForm" class="contact" method="POST">

					<ul class="contactform controls">

                       	<li class="input-prepend">
							<span class="add-on reg"><label style="font-family: Open Sans; font-size: 15px;">Username</label></span>
							<input type="text" placeholder="Username" name="username" value="" class="reg_fields">
                        </li><p>

                        <li class="input-prepend">
							<span class="add-on reg"><label style="font-family: Open Sans; font-size: 15px;">Password</label></span>
							<input type="password" placeholder="Password" name="pass" value="" class="reg_fields">
                        </li><p>

                        <li class="input-prepend">
							<span class="add-on reg"><label style="font-family: Open Sans; font-size: 15px;">Confirm Password</label></span>
							<input type="password" placeholder="Password" name="repass" value="" class="reg_fields">
                        </li><p>

                        <li class="input-prepend">
							<span class="add-on reg"><label style="font-family: Open Sans; font-size: 15px;">E-mail</label></span>
							<input type="text" placeholder="example@example.com" name="email" value="" class="reg_fields"> 
                        </li><p>

                        <li class="input-prepend">
							<span class="add-on reg"><label style="font-family: Open Sans; font-size: 15px;">First Name</label></span>
							<input type="text" placeholder="First Name" name="fname" value="" class="reg_fields">
                        </li><p>

                        <li class="input-prepend">
							<span class="add-on reg"><label style="font-family: Open Sans; font-size: 15px;">Last Name</label></span>
							<input type="text" placeholder="Last Name" name="lname" value="" class="reg_fields">
                        </li><p>

                        <li class="input-prepend">
							<span class="add-on reg"><label style="font-family: Open Sans; font-size: 15px;">Birth Date</label></span>
							<input type="text" placeholder="YYYY-MM-DD" name="bdate" value="" class="reg_fields">
                        </li><p>

						<li>
							<input type="submit" class="button-green button-small" name="register" value="Create an Account">
							<a type="button" class="button-small"  style="position: relative; top: 1px; left: 31.5%">Go Back</a>
						</li>

					</ul>

					<input type="hidden" name="submitted" id="submitted" value="true">

				</form>
			</div>
		</div>

	</body>

</html>



<?php
	session_start();
	//href="WEBTECH_index.html"

	// for checking if entered username is valid
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


	// for checking if 
	function validEmail($Pemail){
		$dbc=mysqli_connect('localhost','root','DBlifeAF_1','gamesdoi');
		$getEmail = $dbc->query("SELECT * 
								FROM user
								WHERE  email = '$Pemail'");
		$fetchEmail = mysqli_fetch_array($getEmail);

		$tempEmail = null;

		foreach($getEmail as $fetchEmail){
			$tempEmail = $fetchEmail['email'];
			//$temppass = $fetchUser['passWord'];
		}

		$checker = 'true';
		if($tempEmail != null){
			$checker = 'false' ;
		}

		//echo  $checker;
		return $checker;
	}


	// checks if entered String has a SPACE
	function hasSpace($Pstring){
		$cmpr = preg_match('/\s/',$Pstring);
		// 1 == HAS space -- > 'true';
		// 0 == NO space -- > 'false';

		if($cmpr == 1){
			$checker = 'true';
		}

		if($cmpr == 0){
			$checker = 'false';
		}

		return $checker;
	}


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


	// checks if string has special characters
	function checkSpecial($Pstring){
		$cmpr = preg_match('/[\^£$%&*()}{@#~?><>,|=_+¬-]/', $Pstring);
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

	// inserts newly registered user into DB; by default, userStatusID = 1;
	function insertUser($PuserName, $Ppass, $Plast, $Pfirst, $Pbday, $Pemail){
		// $Ptype, $Pstatus; default -> 1, 1;

		$dbc=mysqli_connect('localhost','root','DBlifeAF_1','gamesdoi');
		$addUser_query = "INSERT INTO user(userName, passWord, lastName, firstName, dateofBirth, email, userTypeID, userStatusID)
									VALUES('$PuserName', '$Ppass', '$Plast', '$Pfirst', '$Pbday', '$Pemail', 1, 1)";
		$insert_user = mysqli_query($dbc, $addUser_query);
	}

	


	// if 'register' (CREATE AN ACCOUNT) button was pressed
	if (isset($_POST['register'])){
		//echo "<script type='text/javascript'>alert('T R I A L');</script>";
		// variables for each line


// < ------- ------- ------- USERNAME ------- ------- ------- ------- >
		// if 'usernmame' is empty OR contains only spaces
		if(empty($_POST["username"]) || containsWord($_POST["username"]) == 'false'){
			echo "<script type='text/javascript'>alert('USERNAME is empty');</script>";
			// $usernmame_msg here
		}

		// if entered 'username' is already taken
		if(!empty($_POST["username"]) && validUserName($_POST["username"]) == 'false'){
			echo "<script type='text/javascript'>alert('Username is already TAKEN!!');</script>";
			// $_msg here
		}

		// if 'username' has less than 8 characters
		if(!empty($_POST["username"]) && strlen($_POST["username"]) < 8){
			echo "<script type='text/javascript'>alert('Username must have at least 8 characters!!');</script>";
		}

		// if 'username' has more than 16 characters
		if(!empty($_POST["username"]) && strlen($_POST["username"]) > 16){
			echo "<script type='text/javascript'>alert('Username must not have more than 16 characters!!');</script>";
		}

		// checks if 'username' has a SPACE
		if(!empty($_POST["username"]) && hasSpace($_POST["username"]) == 'true'){
			echo "<script type='text/javascript'>alert('SPACES in your username are NOT allowed!!');</script>";
		}

		// checks if 'username' has any special characters  --> (/[\^£$%&*()}{@#~?<>,|=_+¬-]/) <--
		if(!empty($_POST["username"]) && checkSpecial($_POST["username"]) == 'true'){
			//(/[\^£$%&*()}{@#~?<>,|=_+¬-]/)
			echo "<script type='text/javascript'>alert('Special characters (/[\^£$%&*()}{@#~?><>,|=_+¬-]/) are not allowed in your username!!');</script>";
		}
// < ------- ------- ------- PASSWORD ------- ------- ------- ------- >

		// if 'pass' is empty OR contains only spaces
		if(empty($_POST["pass"]) || containsWord($_POST["pass"]) == 'false'){
			echo "<script type='text/javascript'>alert('PASSWORD is empty');</script>";
			// $_msg here
		}

		// if there are spaces in 'pass'
		if(!empty($_POST["pass"]) && hasSpace($_POST["pass"]) == 'true'){
			echo "<script type='text/javascript'>alert('There must be no spaces in your password!!');</script>";
		}

		if(!empty($_POST["pass"]) && checkSpecial($_POST["pass"]) == 'true'){
			echo "<script type='text/javascript'>alert('Password must not contain any of the following special characters:(/[\^£$%&*()}{@#~?><>,|=_+¬-]/)');</script>";
		}

		if(!empty($_POST["pass"]) && strlen($_POST["pass"]) < 8){
			echo "<script type='text/javascript'>alert('Password must have be least 8 characters long!!');</script>";
		}

		if(!empty($_POST["pass"]) && strlen($_POST["pass"]) > 20){
			echo "<script type='text/javascript'>alert('Password must not be longer than 20 characters!!');</script>";
		}

// < ------- ------- ------- CONFIRM PASSWORD------- ------- ------- ------- >

		// if 'repass' is empty OR contains only spaces
		if(empty($_POST["repass"])  || containsWord($_POST["repass"]) == 'false'){
			echo "<script type='text/javascript'>alert('Please CONFIRM password');</script>";
			// $_msg here
		}

		// if 'pass' and 'repass' (confirm pass) do not match
		if(!empty($_POST["pass"]) && !empty($_POST["repass"]) && $_POST["pass"]!=$_POST["repass"]){
			echo "<script type='text/javascript'>alert('Passwords do not match!!');</script>";
		}


// < ------- ------- ------- E-MAIL  ------- ------- ------- ------- >
		// if 'email' is empty OR contains only spaces
		if(empty($_POST["email"])  || containsWord($_POST["email"]) == 'false'){
			echo "<script type='text/javascript'>alert('E-MAIL is empty');</script>";
			// $_msg here
		}

		// if 'email' is already being used by another user
		if(!empty($_POST["email"])  && validEmail($_POST["email"])=='false'){
			echo "<script type='text/javascript'>alert('Another user account already owns this e-mail!!');</script>";
		}

// < ------- ------- ------- FIRST NAME ------- ------- ------- ------- >
		// if 'fname' is empty OR contains only spaces
		if(empty($_POST["fname"])  || containsWord($_POST["fname"]) == 'false'){
			echo "<script type='text/javascript'>alert('FIRST NAME is empty');</script>";
			// $_msg here
		}

// < ------- ------- ------- LAST NAME------- ------- ------- ------- >
		//if 'lname' is empty OR contains only spaces
		if(empty($_POST["lname"])  || containsWord($_POST["lname"]) == 'false'){
			echo "<script type='text/javascript'>alert('LAST NAME is empty');</script>";
			// $_msg here
		}

// < ------- ------- ------- BIRTH DATE------- ------- ------- ------- >
		//if 'bdate' is empty OR contains only spaces
		if(empty($_POST["bdate"])  || containsWord($_POST["bdate"]) == 'false'){
			echo "<script type='text/javascript'>alert('BIRTH DATE is empty');</script>";
			// $_msg here
		}




		// < ------- ------- ------- ------- ------- ------- ------- >

				

		
		echo "<script type='text/javascript'>alert('------- Kilroy was here -------');</script>";

		$tempr_username = null; // working
		$tempr_pass = null;		// working
		$tempr_email = null;	// working
		$tempr_fname = null;	// working
		$tempr_lname = null;	// working
		$temp_bdate = null;		// working


		// working
		// saves 'username' input to tempr_username, IF all VALID conditions were met
		if(!empty($_POST["username"]) && containsWord($_POST["username"]) == 'true' && validUserName($_POST["username"]) == 'true'
			&& strlen($_POST["username"]) >= 8 && strlen($_POST["username"]) <= 16  && hasSpace($_POST["username"]) == 'false'
			 && checkSpecial($_POST["username"]) == 'false'){

			$tempr_username = $_POST["username"];
			echo "<script type='text/javascript'>alert('VALID username: $tempr_username');</script>";
		}


		// working
		// saves 'pass' input to tempr_pass, IF all VALID conditions were met
		if(!empty($_POST["pass"]) && containsWord($_POST["pass"]) == 'true' && hasSpace($_POST["pass"]) == 'false' && checkSpecial($_POST["pass"]) == 'false' && !empty($_POST["repass"]) && containsWord($_POST["repass"]) == 'true' && $_POST["pass"]==$_POST["repass"] && !empty($_POST["pass"]) && strlen($_POST["pass"]) >= 8 && !empty($_POST["pass"]) && strlen($_POST["pass"]) <= 20){
			$tempr_pass = $_POST["pass"];
			echo "<script type='text/javascript'>alert('VALID password: $tempr_pass');</script>";
		}		


		// working
		// saves 'email' input to tempr_email, IF all VALID conditions were met
		if(!empty($_POST["email"]) && containsWord($_POST["repass"]) == 'true' && validEmail($_POST["email"])=='true'){
			$tempr_email = $_POST["email"];
			echo "<script type='text/javascript'>alert('VALID e-mail: $tempr_email');</script>";
		}


		// working
		// saves 'fname' input to tempr_email, IF all VALID conditions were met
		if(!empty($_POST["fname"])  && containsWord($_POST["fname"]) == 'true'){
			$tempr_fname = $_POST["fname"];
			echo "<script type='text/javascript'>alert('VALID First Name: $tempr_fname');</script>";
		}

		// working
		// saves 'lname' input to tempr_email, IF all VALID conditions were met
		if(!empty($_POST["lname"])  && containsWord($_POST["lname"]) == 'true'){
			$tempr_lname = $_POST["lname"];
			echo "<script type='text/javascript'>alert('VALID Last Name: $tempr_lname');</script>";
		}

		
		if(!empty($_POST["bdate"])  && containsWord($_POST["bdate"]) == 'true'){
			$temp_bdate = $_POST["bdate"];
			echo "<script type='text/javascript'>alert('VALID Birth Date: $temp_bdate');</script>";
		}

		/*
		$tempr_username = null; // working
		$tempr_pass = null;		// working
		$tempr_email = null;	// working
		$tempr_fname = null;	// working
		$tempr_lname = null;	// working
		$temp_bdate = null;
		*/

		if($tempr_username!=null && $tempr_pass!=null && $tempr_email!=null && $tempr_fname!=null && $tempr_lname!=null && $temp_bdate!=null ){
			echo "<script type='text/javascript'>alert('New user was inserted into DB');</script>";

			insertUser($tempr_username, $tempr_pass, $tempr_lname,  $tempr_fname, $temp_bdate, $tempr_email);

			/*
			$_SESSION["userID"] = $testUserID ;
			$param = $_SESSION["userID"];
			echo "<script type='text/javascript'>alert('Current User ID Session: $param');</script>";
			*/

			$dbc=mysqli_connect('localhost','root','DBlifeAF_1','gamesdoi');
			$getUserID = $dbc->query("	SELECT *
										FROM user
										WHERE userName='$tempr_username'");
			$fetchUserID = mysqli_fetch_array($getUserID);
			$temp_session = null;
			foreach($getUserID as $fetchUserID){
				$temp_session = $fetchUserID['userID'];
			}
			session_start();
			$_SESSION["userID"] = $temp_session;
			echo "<script type='text/javascript'>alert('New CURRENT User ID: $temp_session ');</script>";
			
			header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/WEBTECH_index.php");

		}

		//function insertUser($PuserName, $Ppass, $Plast, $Pfirst, $Pbday, $Pemail)
	}

?>

