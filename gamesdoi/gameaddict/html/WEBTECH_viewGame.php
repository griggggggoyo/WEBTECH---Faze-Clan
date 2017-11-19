<?php
session_start();
require 'database.php';
#$_SESSION['gameID'] =1 ;
$_SESSION['gameID'] = $_GET['value'];
$game = $_SESSION['gameID'];
?>



<!doctype html>
<html lang="en-US">

<!-- Mirrored from skywarriorthemes.com/gameaddict/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Oct 2017 09:33:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>GAMESDOI</title>
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

			<div class="span65" style="padding-top: 20px; padding-left: 280px;">
				<div class="span65" style="padding-left: 190px;">
					<input type="input" name="search" style="height: 15px;"><i class="icon-search" style="background-color: #FF5B5B; padding : 5px 5px 5px 5px;"></i>
				</div>
				<div class="span1">
					<div id="profileNav">
					<ul>
						<li ><a>Profile</a>
							<ul>
								<li><a href="WEBTECH_userProfile.html">Profile</a></li>
								<li><a href="WEBTECH_index.html">Log-out</a></li>
								<li><a href="WEBTECH_aboutUs.html">About Us</a></li>
							</ul>
						</li>
					</ul>
					</div>
				</div>


			</div>



			<!-- End Social logos -->

		</div>
		<!-- NAVBAR -->

		<div class="page normal-page container">
		<div >
		<div class="span12" style=" border-bottom: 1px solid black; margin-bottom: 20px;">
			<div  style="margin-bottom: 20px;">
				<img src="">
			</div>
			<?php

			$displayGames= "SELECT *
											FROM GAME G JOIN GENRE GE ON G.genreID=GE.genreID
											WHERE gameID = $game";

			$result=mysqli_query($db,$displayGames);
			$row = mysqli_fetch_row($result); ?>
			<h1><?php echo $row[1]; ?></h1>
			<p style="padding-left:20px;"><b>by <?php echo $row[6];?></b></p>
			<p style="padding-left:20px;">Category <?php echo $row[10];?></p>
			<p style="padding-left:20px;">Cost <?php echo $row[3];?></p>
			<p style="padding-left:20px;">Platform <?php echo $row[4];?></p>
			<p style="padding-left:20px;">Date Released <?php echo $row[5];?></p>
		</div>

			<br>

		</div>

			<div class="span12">
				<div class="block span12">
					<?php  echo $_SESSION['gameID']; ?>
				</div>
				<div style="padding-top: 20px;">
						<p style="padding-left:20px;"><?php echo $row[8];?></p>
					</div>

				<div style="padding-top: 20px;">
					<br>
					<br>




			</div>

			<div class="block span12 first cf">
					<div class="title-wrapper">
							<h3 class="widget-title">Reviews </h3>
							<div class="clear"></div>
					</div>

					<div id="makereviewbutton">
						<a class="button-small" href="WEBTECH_addReview.html"> CREATE REVIEW </a>
					</div>

					<div id="reviewfilter">
						<button class="button-small">VIEW ALL REVIEWS</button> &nbsp;&nbsp;&nbsp;
						<button class="button-small">VIEW MOST UPVOTED</button>
					</div>

 							<div class="wcontainer">
 								<img src="icon.png">
 								<a href="WEBTECH_userProfile.html"><b class="namereview"> &nbsp;&nbsp;&nbsp;MarvinLA0</b></a>&nbsp; <i> rated it 5 out of 5 </i> <br>



 								<div class="ratereview">

 									<a class="ups" href="#"><i class="icon-thumbs-up m"></i></a>
 									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 									<a href="#"><i class="icon-thumbs-down m"></i></a>

 								</div>

 								<div style="padding-left: 50px;">
 									<p class="comment">NICE GAME!!!!</p>
 								</div><p>

 								<div class="reviewscore">

 									<p><i>Review Score:&nbsp; <b class="posi">+2</b>&nbsp; | &nbsp;<b class="nega">-0</b></i></p>

 								</div>

 							</div>
 							<div class="wcontainer">
 								<img src="icon.png">
 								<a href="WEBTECH_userProfile.html"><b class="namereview"> &nbsp;&nbsp;&nbsp;P4t4R</b></a>&nbsp; <i> rated it 2 out of 5 </i> <br>
 								<div class="ratereview">

 									<a class="ups" href="#"><i class="icon-thumbs-up m"></i></a>
 									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 									<a href="#"><i class="icon-thumbs-down m"></i></a>

 								</div>
 								<div  style="padding-left: 50px;"><p class="comment">2/10 lmao</p></div><p>

 								<div class="reviewscore">

 									<p><i>Review Score:&nbsp; <b class="posi">+3</b>&nbsp; | &nbsp;<b class="nega">-16</b></i></p>

 								</div>

 							</div>

 							<div class="wcontainer">
 								<img src="icon.png">
 								<a href="WEBTECH_userProfile.html"><b class="namereview">&nbsp;&nbsp;&nbsp;Gregory Petrola</b></a>&nbsp; <i> rated it 4 out of 5 </i> <br>
 								<div class="ratereview">

 									<a class="ups" href="#"><i class="icon-thumbs-up m"></i></a>
 									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 									<a href="#"><i class="icon-thumbs-down m"></i></a>

 								</div>
 								<div  style="padding-left: 50px; width: 80%"><p class="comment">In spite of some technical issues, BioShock creates an amazing world that you'll want to explore and a compelling mystery that slowly comes together as you play.</p></div><p>

 								<div class="reviewscore">

 									<p><i>Review Score:&nbsp; <b class="posi">+43</b>&nbsp; | &nbsp;<b class="nega">-12</b></i></p>

 								</div>

 							</div>


 			</div>


		</div>


		<!-- JavaScript -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.cookie.pack.js"></script>
        <script src="../../../code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		<script type="text/javascript" src="js/jquery-migrate.min.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox.js"></script>
		<script type="text/javascript" src="js/jquery.elastic.source.js"></script>
		<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery.ui.totop.js"></script>
		<script type="text/javascript" src="js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="js/login-with-ajax.js"></script>
		<script type="text/javascript" src="js/bootstrap-button.js"></script>
		<script type="text/javascript" src="js/bootstrap-carousel.js"></script>
		<script type="text/javascript" src="js/bootstrap-collapse.js"></script>
		<script type="text/javascript" src="js/bootstrap-modal.js"></script>
		<script type="text/javascript" src="js/bootstrap-tab.js"></script>
		<script type="text/javascript" src="js/bootstrap-tooltip.js"></script>
		<script type="text/javascript" src="js/bootstrap-transition.js"></script>
		<script type="text/javascript" src="js/bootstrap-popover.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript" src="js/global.js"></script>
		<script type="text/javascript" src="js/imagescale.js"></script>
		<script type="text/javascript" src="js/login-with-ajax.source.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	 	<script type="text/javascript" src="js/theme.min.js"></script>
		<script type="text/javascript" src="js/tinymce.min.js"></script>
		<script type="text/javascript" src="js/transit.js"></script>
		<script type="text/javascript" src="js/admin.js"></script>
		<script type="text/javascript" src="js/greensock.js"></script>
		<script type="text/javascript" src="js/layerslider.transitions.js"></script>
		<script type="text/javascript" src="js/layerslider.kreaturamedia.jquery.js"></script>
		<script type="text/javascript" src="js/tabs.js"></script>
		<script type="text/javascript" src="js/ticker.js"></script>

   		<!--
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		-->
		<script>
			jQuery("#layerslider").layerSlider({
				pauseOnHover: false,
				autoPlayVideos: false,
				skinsPath: './layerslider/skins/',
				responsive : true,
				responsiveUnder : 1200,
				layersContainer : 1200,
				skin_name: 'fullwidth',
				navStartStop: false
			});
		</script>
        <script type="text/javascript" src="js/styleswitch.js"></script>
        <script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script>
        <script type="text/javascript" src="js/styleswitchcustom.js"></script>
	    <script type="text/javascript">
            jQuery(function () {
                jQuery('#js-news').ticker();
            });
        </script>
        <!-- End JavaScript -->

	</body>

<!-- Mirrored from skywarriorthemes.com/gameaddict/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Oct 2017 09:37:00 GMT -->
</html>
