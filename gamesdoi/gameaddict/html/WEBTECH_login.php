<!doctype html>
<html lang="en-US">
	
<!-- Mirrored from skywarriorthemes.com/gameaddict/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Oct 2017 09:33:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>GAMESDOI | Login</title>
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
				<h3 class="widget-title">Login to your account</h3>
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

						<li>
							<input type="submit" class="button-green button-small" name="login" value="Login">

							<a href="WEBTECH_index.php" type="button" class="button-small"  style="position: relative; top: 1px; left: 40%">Go Back</a>
						</li>
						

					</ul>

					<input type="hidden" name="submitted" id="submitted" value="true">

				</form>
			</div>
		</div>

	</body>

</html>

<?php
	// href="WEBTECH_index.html"
	session_start();
	
	// returns User ID (can return null if '$PuserName' was not found in DB)
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
		

	// retruns password based on User ID
	function getPassword($PuserID){
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


	if (isset($_POST['login'])){
		
		// if 'Username' field is empty
		if(empty($_POST["username"])){
			echo "<script type='text/javascript'>alert('Please enter a username.');</script>";
		}

		// if 'Password' field is empty
		if(empty($_POST["pass"])){
			echo "<script type='text/javascript'>alert('Please enter your password.');</script>";
		}



		// variable for attempting to find the userID of inputted 'Username';
		$testUserID = getUserID($_POST["username"]);		
		

		// 'Username' field username was NOT found!!!
		if(!empty($_POST["username"]) && $testUserID == null){
			echo "<script type='text/javascript'>alert('User account does not exist!!');</script>";
		}

		// 'Username' field username exists in the DB!!!
		if(!empty($_POST["username"]) && $testUserID != null){
			echo "<script type='text/javascript'>alert('account exists!! --> $testUserID');</script>";

			$testUserPass = $_POST["pass"];

			// if password is CORRECT
			if(!empty($_POST["pass"]) && $testUserPass != getPassword($testUserID)){
				echo "<script type='text/javascript'>alert('Not a  match!!');</script>";
			}


			// if password is NOT correct
			if(!empty($_POST["pass"]) && $testUserPass == getPassword($testUserID)){

				echo "<script type='text/javascript'>alert('Password matches!!');</script>";

				$_SESSION["userID"] = $testUserID ;
				$param = $_SESSION["userID"];
				echo "<script type='text/javascript'>alert('Current User ID Session: $param');</script>";

				header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/WEBTECH_index.php");
			}


		}

	}
?>