<?php
session_start();
//require 'database.php';
//$_SESSION['search'] =null;
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

<!DOCTYPE HTML>
<html lang="en-US">

<!-- Mirrored from skywarriorthemes.com/gameaddict/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Oct 2017 09:33:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Game addict | Unleash your passion</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="shortcut icon" href="img/favicon.png">
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/layerslider.css">
		        <!-- picker styles -->
        <link rel="stylesheet" href="colorstyles/picker.css" type="text/css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="background1" href="colorstyles/background1.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="background2" href="colorstyles/background2.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="background3" href="colorstyles/background3.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="background4" href="colorstyles/background4.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="background5" href="colorstyles/background5.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="background6" href="colorstyles/background6.css" />
          <!-- end picker styles -->
		<link rel="stylesheet" id="custom-style-css"  href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italc,700italic,700,800,800italic" type="text/css" media="all" />
		<!-- IMPORT MO TONG NASA BABA! V -->
		<link href="css/menubar.css" rel="stylesheet">
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
			<form <?php echo $_SERVER['PHP_SELF'];?> method="POST">
			<div class="span65" style="padding-top: 20px; padding-left: 280px;">
				<div class="span65" style="padding-left: 180px;">
					<input type="input" name="gameNameFind" style="height: 15px;" placeholder="name of game"><input type="submit" name="searchBtn" value="" style="background-color: #FF5B5B; padding : 5px 5px 5px 5px;height: 20px; width:10%;">
				</div>
				<div class="span1">
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
		<div style="padding-left:260px;"> <h1>Results for <?php echo $search; ?></h1></div>


 				<div class="span8">

 					<div class="block span12 ">


						<div>
							<form action="<?php echo $SERVER['PHP_SELF'];?>" method ="POST">
								<?php
												$displayGames= "SELECT *
																				FROM GAME G JOIN GENRE GE ON G.genreID=GE.genreID
																				WHERE gameName LIKE '$search%' ";
												$dbc=mysqli_connect('localhost','root','DBlifeAF_1','gamesdoi');
												$result=mysqli_query($dbc,$displayGames);
								?>
								<?php
											while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
											echo "<div class=\"widget\">
												<div class=\"wcontainer\">
													<ul class=\"clanwar-list\">
														<li>
														<h4><a href=\"WEBTECH_viewGame.php?value={$row['gameID']}\">{$row['gameName']}</a></h4>
														Developed by {$row['gameDeveloper']} <br><br>
														</li>
														<li>
															<br>Category: {$row['genreName']}
															<br>Cost: P{$row['gamePrice']}
															<br>Platform:c{$row['gamePlatform']}
															<br>Date Released: {$row['dateReleased']}
														</li>
														<li>
															<h5><a href=\"WEBTECH_viewGame.php?value={$row['gameID']}\">Game Review for {$row['gameName']}</a></h5>
															<p>
															</p>
														</li>
													</ul>
												</div>
											</div>
											";
										}
										?>

							</form>
						</div>


 					</div>
 				</div>

 				<div class="span4">
 					<div class="title-wrapper">
					<h3 class="widget-title">Related Games</h3>
					<div class="clear"></div>
				</div>
					<div class="block span12 first sidebar">

						<div class="widget">

							<div class="wcontainer">
								<ul class="clanwar-list">

									<li >
										Counter-Strike: Global Offensive
										<img src="CSGO.jpg">
									</li>
									<li >
										Fortnite
										<img src="fortnite.jpg">
									</li>
									<li >
										Call of Duty: Black Ops
										<img src="COD.jpg">
									</li>
									<li >
										Player Unknown's Battleground
										<img src="PUBG.jpg">
									</li>
								</ul>
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
