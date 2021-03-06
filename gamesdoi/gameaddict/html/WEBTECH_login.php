<!doctype html>
<html lang="en-US">

<!-- Mirrored from skywarriorthemes.com/gameaddict/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Oct 2017 09:33:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<script src="../bower_components/webcomponentsjs/webcomponents-lite.js"></script>
	<link rel="import" href="../bower_components/polymer/polymer-element.html">
	<link rel="import" href="../bower_components/paper-input/paper-input.html">
	<link rel="import" href="../bower_components/paper-button/paper-button.html">
	<link rel="import" href="../bower_components/iron-ajax/iron-ajax.html">
	<link rel="import" href="../bower_components/paper-item/paper-item.html">
	<link rel="import" href="../bower_components/paper-listbox/paper-listbox.html">
	<link rel="import" href="../bower_components/paper-dropdown-menu/paper-dropdown-menu.html">
	<link rel="import" href="../bower_components/vaadin-valo-theme/vaadin-grid.html">
	<link rel="import" href="../bower_components/vaadin-grid/vaadin-grid.html">
	<link rel="import" href="../bower_components/neon-animation/neon-animations.html">
	<link rel="import" href="../bower_components/neon-animation/web-animations.html">
	<link rel="import" href="../bower_components/neon-animation/neon-animation.html">
	<link rel="import" href="shared-styles.html">
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

	<?php

		session_start();

		$message = NULL;

		if (isset($_POST['login'])) {

			if (empty($_POST['username'])) {

				$_SESSION['username'] = FALSE;
				$message = "You forgot to enter a username!";

			}

			else {

				$_SESSION['username'] = $_POST['username'];

			}

			if (empty($_POST['password'])) {

				$_SESSION['password'] = FALSE;
				$message = "You forgot to enter a password!";

			}

			else {

				$_SESSION['password'] = $_POST['password'];

			}

			if (!isset($message)) {

				$username = $_SESSION['username'];
				$password = $_SESSION['password'];

				require_once("database.php");

				$queryMem = "SELECT userID, userTypeID, userName FROM USER WHERE userName = '{$username}' AND passWord = '{$password}'";
				$resultMem = mysqli_query($db, $queryMem);
				$rowMem = mysqli_fetch_array($resultMem);

				if ($rowMem['userName'] == $_SESSION['username']) {

					if ($rowMem['userTypeID'] == 2) { /* MEMBER */

						$_SESSION['userTypeID'] = $rowMem['userTypeID'];
						$_SESSION['userID'] = $rowMem['userID'];

						header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/WEBTECH_MEMBER_index.php");

					}

					else if ($rowMem['userTypeID'] == 1) { /* ADMIN */

						$_SESSION['userTypeID'] = $rowMem['userTypeID'];
						$_SESSION['userID'] = $rowMem['userID'];

						header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/WEBTECH_ADMIN_index.php");

					}

				}

				else {

					$message = "The username or password is invalid, or the account is not registered.";

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
				<h3 class="widget-title">Login to your account</h3>
					<div class="clear"></div>
				</div>
					<div class="mcontainer">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactForm" class="contact" method="POST">

					<font color="red"><b><?php echo $message ?></b></font>

					<ul class="contactform controls">

              <li class="input-prepend">
							<paper-input name='username' always-float-label label='Username' ></paper-input>
              </li><p>

              <li class="input-prepend">
							<paper-input name='password' always-float-label label='Password' ></paper-input>
              </li><p>

						<li>
							  <paper-button toggles id="submit" raised class="green" on-click="">Log-in</paper-button>

							<a href="WEBTECH_index.php" type="button" class="button-small"  style="position: relative; top: 1px; left: 40%">Go Back</a>
						</li>


					</ul>

					<input type="hidden" name="submitted" id="submitted" value="true">

				</form>
			</div>
		</div>

	</body>

</html>
