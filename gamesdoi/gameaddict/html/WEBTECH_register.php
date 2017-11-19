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
			<a class="brand" href="WEBTECH_index.html">
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


	// checks if entered password has a SPACE
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



	// inserts newly registered user into DB; by default, userStatusID = 1;
	function insertUser($PuserName, $Ppass, $Plast, $Pfirst, $Pbday, $Pemail){
		// $Ptype, $Pstatus; default -> 1, 1;

		$dbc=mysqli_connect('localhost','root','DBlifeAF_1','gamesdoi');
		$addUser_query = "INSERT INTO user(userName, passWord, lastName, firstName, dateofBirth, email, userTypeID, userStatusID)
									VALUES('$PuserName', '$Ppass', '$Plast', '$Pfirst', '$Pbday', '$Pemail', 1, 1)";
		$insert_user = mysqli_query($dbc, $addUser_query);
	}

	
	if (isset($_POST['register'])){
		//echo "<script type='text/javascript'>alert('T R I A L');</script>";
		// variables for each line


		// if 'usernmame' is empty OR contains only spaces
		if(empty($_POST["username"]) || containsWord($_POST["username"]) == 'false'){
			echo "<script type='text/javascript'>alert('USERNAME is empty');</script>";
			// $usernmame_msg here
		}

		// if 'pass' is empty OR contains only spaces
		if(empty($_POST["pass"]) || containsWord($_POST["pass"]) == 'false'){
			echo "<script type='text/javascript'>alert('PASSWORD is empty');</script>";
			// $_msg here
		}

		// if 'repass' is empty OR contains only spaces
		if(empty($_POST["repass"])  || containsWord($_POST["repass"]) == 'false'){
			echo "<script type='text/javascript'>alert('Please CONFIRM password');</script>";
			// $_msg here
		}

		// if 'email' is empty OR contains only spaces
		if(empty($_POST["email"])  || containsWord($_POST["email"]) == 'false'){
			echo "<script type='text/javascript'>alert('E-MAIL is empty');</script>";
			// $_msg here
		}


		// if 'fname' is empty OR contains only spaces
		if(empty($_POST["fname"])  || containsWord($_POST["fname"]) == 'false'){
			echo "<script type='text/javascript'>alert('FIRST NAME is empty');</script>";
			// $_msg here
		}

		//if 'lname' is empty OR contains only spaces
		if(empty($_POST["lname"])  || containsWord($_POST["lname"]) == 'false'){
			echo "<script type='text/javascript'>alert('LAST NAME is empty');</script>";
			// $_msg here
		}

		//if 'bdate' is empty OR contains only spaces
		if(empty($_POST["bdate"])  || containsWord($_POST["bdate"]) == 'false'){
			echo "<script type='text/javascript'>alert('BIRTH DATE is empty');</script>";
			// $_msg here
		}


		// if entered 'username' is still valid
		if(!empty($_POST["username"]) && validUserName($_POST["username"]) == 'true' && containsWord($_POST["username"])=='true'
			){
			echo "<script type='text/javascript'>alert('Entered username is VALIDD');</script>";
			// $_msg here
		}

		// if entered 'username' is already taken
		if(!empty($_POST["username"]) && validUserName($_POST["username"]) == 'false'){
			echo "<script type='text/javascript'>alert('Username is already TAKEN!!');</script>";
			// $_msg here
		}


		// if 'pass' and 'repass' (confirm pass) do not match
		if(!empty($_POST["pass"]) && !empty($_POST["repass"]) && $_POST["pass"]!=$_POST["repass"]){
			echo "<script type='text/javascript'>alert('Passwords do not match!!');</script>";
		}

		// if 'email' is already being used by another user
		if(!empty($_POST["email"])  && validEmail($_POST["email"])=='false'){
			echo "<script type='text/javascript'>alert('Another user account already owns this e-mail!!');</script>";
		}

	}

?>

