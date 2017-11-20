<?php
session_start();
$gameid = $_SESSION['gameid'];

$displayGames= "SELECT *
								FROM GAME G JOIN GENRE GE ON G.genreID=GE.genreID
								WHERE gameID = '$gameid' ";
$dbc=mysqli_connect('localhost','root','12345','reviewschema');
$result=mysqli_query($dbc,$displayGames);
$row=mysqli_fetch_row($result);

$search = $_SESSION['gameNameFind'];
if(isset($_POST['searchBtn'])){
	if(!empty($_POST['gameNameFind'])){
		  $_SESSION['gameNameFind'] =$_POST['gameNameFind'];
			header("Location: http://".$_SERVER['HTTP_HOST']. dirname($_SERVER['PHP_SELF'])."/WEBTECH_searchGame.php");
	}
	else{
		echo 'No results found';
	}
}
?>
<!doctype html>
<html lang="en-US">

<!-- Mirrored from skywarriorthemes.com/gameaddict/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Oct 2017 09:33:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>GAMESDOI | Create Review</title>
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
			<a class="brand" href="WEBTECH_MEMBER_index.php">
			<img src="img/logo.png" alt="logo"  />
			</a>
			<!-- End Logo -->
			<!-- Social logos -->

			<form <?php echo $_SERVER['PHP_SELF'];?> method="POST">
			<div class="span65" style="padding-top: 20px; padding-left: 280px;">
				<div class="span65" style="padding-left: 180px;">
					<input type="input" name="gameNameFind" style="height: 40px;" placeholder="  name of game"><button type="submit" name="searchBtn" style=""><i class="fa fa-search"></i></button>
				</div>
				<div class="span1" style="padding-left:20px; padding-top:20px;">
					<div id="profileNav">
					<ul >
						<li ><a>Profile</a>
							<ul>
								<li><a href="WEBTECH_userProfile.html">Profile</a></li>
								<li><a>Log-out</a></li>
								<li><a>About Us</a></li>
							</ul>
						</li>
					</ul>
			</div>
				</div>


			</div>
		</form>


			<!-- End Social logos -->

		</div>
		<!-- NAVBAR -->

		<div class="page normal-page container">
		<div >
		<div class="span12" style=" border-bottom: 1px solid black; margin-bottom: 20px;">

			<div style="font-weight: bold; font-size: 28px; float: right; padding-right: 40px; padding-top: 20px; font-family: Open Sans;">Rating: 3.7</div>
			<div class="span4" style="padding-left:30px;">
				<h1> <?php echo $row[1]; ?> </h1>
			<label>by <?php echo $row[6] ?></label>
			<label>Genre <?php echo $row[10] ?></label>
			<label>Platforms <?php echo $row[5] ?></label>
			<label>Released Date <?php echo $row[4] ?></label>
			</div>
		</div>



			<br>

		</div>

		<div class="block block-contactform_block span12 first cf">
			<div class="title-wrapper">
				<h3 class="widget-title">YOUR REVIEW</h3>
					<div class="clear"></div>
				</div>
					<div class="mcontainer">
				<form action="addReviewToDB.php" method="POST" id="contactForm" class="contact" novalidate="novalidate">

					<ul class="contactform controls">
						<li class="input-prepend" style="padding-left:60px;">
							<label><b>Title</b></label>
						<input style="width: 50%; height:auto;" type= "text" name="title" id="title" placeholder="Title of Review" maxlength="140"/>
						</li >
						<li style="padding-left:60px;">
						<label><b>Rating</b></label>
						<i style="position: relative; bottom: 10px; font-family: Open Sans; font-size: 15px;"></i>
						</li>
						<li class="input-prepend"  style="padding-left:60px;">

							<fieldset class="rating" >
    						<input type="radio" id="star5" name="rating" value="1" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    						<input type="radio" id="star4" name="rating" value="2" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    						<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    						<input type="radio" id="star2" name="rating" value="4" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
   							<input type="radio" id="star1" name="rating" value="5" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
							</fieldset>

						</li>

            <li class="input-prepend" style="padding-left:60px;">
							<label><b>Review</b></label>
						</li>
						<li>
							<span class="add-on"><i class="icon-align-justify"></i></span>
							<textarea name="comments" placeholder="Write your review..." id="comments" rows="7" cols="30" class="required requiredField"></textarea>
						</li>

						<li>
							<input type="submit" class="button-green button-small" value="Submit Review" href="addReviewtoDB.php">
							<a type="button" class="button-small" style="position: relative; top: 1px; left: 73%" href="WEBTECH_viewGame.php?value=<?php echo $gameid; ?>">Go Back</a>
						</li>

					</ul>

					<input type="hidden" name="submitted" id="submitted" value="true">

				</form>
			</div>
		</div>
