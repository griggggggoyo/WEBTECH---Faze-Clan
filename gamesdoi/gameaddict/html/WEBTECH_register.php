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

	<?php 

		session_start();

		require_once("database.php");

		$message = NULL;

		if (isset($_POST['register'])) {

			if (empty($_POST['username']) || empty($_POST['pass']) || empty($_POST['repass']) || empty($_POST['email']) || empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['bdate'])) {

				$message = "You forgot to complete all fields.";

			}

			else {

				$querySame = "SELECT userID FROM user WHERE '{$_POST['username']}' = userName OR '{$_POST['email']}' = email";
				$resultSame = mysqli_query($db, $querySame);
				$rowSame = mysqli_fetch_array($resultSame);

				if (empty($rowSame['userID'])) {

					if ($_POST['pass'] == $_POST['repass']) {

						if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

							if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $_POST['bdate'])) {

								$queryInsert = "INSERT INTO user (userName, passWord, email, firstName, lastName, dateOfBirth, userTypeID, userStatusID) VALUES ('{$_POST['username']}', '{$_POST['pass']}', '{$_POST['email']}', '{$_POST['fname']}', '{$_POST['lname']}', CAST('{$_POST['bdate']}' AS DATE), 2, 1)";

								$resultInsert = mysqli_query($db, $queryInsert);

							}

							else {

								$message = "Date entered does not match format (YYYY-MM-DD)";

							}

						}

						else {

							$message = "Email is not valid.";

						}

					}

					else {

						$message = "Passwords does not match.";

					}

				}

				else {

					$message = "Username already exists.";

				}

			}

		}

	?>

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

					&nbsp;<p><font color="red"><?php echo $message; ?></font>

					<ul class="contactform controls">

                       	<li class="input-prepend">
							<span class="add-on reg"><label style="font-family: Open Sans; font-size: 15px;">Username</label></span>
							<input type="text" placeholder="Username" name="username" class="reg_fields">
                        </li><p>

                        <li class="input-prepend">
							<span class="add-on reg"><label style="font-family: Open Sans; font-size: 15px;">Password</label></span>
							<input type="password" placeholder="Password" name="pass" class="reg_fields">
                        </li><p>

                        <li class="input-prepend">
							<span class="add-on reg"><label style="font-family: Open Sans; font-size: 15px;">Confirm Password</label></span>
							<input type="password" placeholder="Password" name="repass" class="reg_fields">
                        </li><p>

                        <li class="input-prepend">
							<span class="add-on reg"><label style="font-family: Open Sans; font-size: 15px;">E-mail</label></span>
							<input type="text" placeholder="example@example.com" name="email" class="reg_fields"> 
                        </li><p>

                        <li class="input-prepend">
							<span class="add-on reg"><label style="font-family: Open Sans; font-size: 15px;">First Name</label></span>
							<input type="text" placeholder="First Name" name="fname" class="reg_fields">
                        </li><p>

                        <li class="input-prepend">
							<span class="add-on reg"><label style="font-family: Open Sans; font-size: 15px;">Last Name</label></span>
							<input type="text" placeholder="Last Name" name="lname" class="reg_fields">
                        </li><p>

                        <li class="input-prepend">
							<span class="add-on reg"><label style="font-family: Open Sans; font-size: 15px;">Birth Date</label></span>
							<input type="text" placeholder="YYYY-MM-DD" name="bdate" class="reg_fields">
                        </li><p>

						<li>
							<input type="submit" class="button-green button-small" name="register" value="Create an Account">
							<a href="WEBTECH_index.php" type="button" class="button-small"  style="position: relative; top: 1px; left: 31.5%">Go Back</a>
						</li>

					</ul>

					<input type="hidden" name="submitted" id="submitted" value="true">

				</form>
			</div>
		</div>

	</body>

</html>

