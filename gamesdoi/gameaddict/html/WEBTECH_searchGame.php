<?php
session_start();
require 'database.php';
$_SESSION['SEARCHEDGAME'] ="tukan";
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

			<div class="span65" style="padding-top: 20px; padding-left: 280px;">
				<div class="span65" style="padding-left: 190px;">
					<input type="input" name="search" style="height: 15px;"><i class="icon-search" style="background-color: #FF5B5B; padding : 5px 5px 5px 5px;"></i>
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



			<!-- End Social logos -->

		</div>
		<!-- NAVBAR -->


		<div class="page normal-page container">
		<div style="padding-left:260px;"> <h1>Results for Bioshock</h1></div>


				<!-- Sidebar -->
				<div class="span3">
				<div class="title-wrapper">
					<h3 class="widget-title">Filter Results</h3>
					<div class="clear"></div>
				</div>
					<div class="block span12 first sidebar">

						<div class="widget">

							<div class="wcontainer">
								<ul class="clanwar-list">

									<li >
										<ul><h4>Sort by</h4></ul>
											<li><a href="#">popularity</a></li>
											<li><a href="#">rating</a></li>
											<li><a href="#">cost</a></li>
											<li><a href="#">new</a></li>
									</li>
									<li >
										<ul><h4>Category</h4></ul>
											<li><a href="#">FPS</a></li>
											<li><a href="#">MOBA</a></li>
											<li><a href="#">Adventure</a></li>
											<li><a href="#">RPG</a></li>
									</li>
									<li >
										<ul><h4>Platform</h4></ul>
											<li><a href="#">PC</a></li>
											<li><a href="#">PS4</a></li>
											<li><a href="#">XBOX ONE</a></li>
											<li><a href="#">Nintendo Switch</a></li>
									</li>
								</ul>
							</div>
						</div>

					</div>
					<!-- Sidebar -->
				</div>
 				<div class="span6">

 					<div class="block span12 ">

						<div>
							<form method ="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
								<?php
												$displayGames= "SELECT * FROM GAME WHERE gameName LIKE 'tukan%'";
												$result=mysqli_query($db,$displayGames);
												echo '<table width="75%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
												<tr>
												<td width="15%"><div align="center"><b> NAME
												</div></b></td>
												<td width="20%"><div align="center"><b> description
												</div></b></td>
												<td width="10%"><div align="center"><b> genreID
												</div></b></td>
												</tr>';
								?>
								<?php
											while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
											echo "<tr>
											<td width=\"15%\"><div align=\"center\">{$row['gameName']}
											</div></td>
											<td width=\"10%\"><div align=\"center\">{$row['gameDescription']}
											</div></td>
											<td width=\"10%\"><div align=\"center\">{$row['genreID']}
											</div></td>
											</tr>
											";
										}echo '</table>';?>

							</form>
						</div>

						<div class="widget">

							<div class="wcontainer">
								<ul class="clanwar-list">
									<li>
										<div class="span4"><img src="bioshock.jpeg"></div>
										<div style="float: right; color: red; font-size: 15px;"><b>5.0</b></div>
										<h4><a href="#"> Bioshock</a></h4>
										Developed by 2K Games
										<br>
										<br>
										<br>

									</li>
									<li>
										<br>Category: FPS
										<br>Cost: $99,999
										<br>Platform: PS3, XBOX 360, PC
										<br>Date Released: XXX,99,9999

									</li>
									<li>
										<h5><a href="#">Game Review for Bioshock</a></h5>
										<p>
											It's hard to believe, but it has been a little over a decade since BioShock first released for Xbox 360 and PC.
										</p>
									</li>
									<li>
										<input type="submit" name="" value="View Review" style="width: 100%;">
									</li>



								</ul>

							</div>



					</div>

					<div class="widget">

							<div class="wcontainer">
								<ul class="clanwar-list">
									<li>
										<div class="span4"><img src="bioshock2.jpg"></div>
										<div style="float: right; color: red; font-size: 15px;"><b>5.0</b></div>
										<h4><a href="#"> Bioshock 2</a></h4>

										Developed by 2K Games
										<br>
										<br>
										<br>

									</li>
									<li>
										<br>Category: FPS
										<br>Cost: $99,999
										<br>Platform: PS4, XBOX one, PC
										<br>Date Released: XXX,99,9999

									</li>
									<li>
										<h5><a href="#">Game Review for Bioshock 2</a></h5>
										<p>
											The new bioshock 2 is very amazing, it has so many improvements.
										</p>
									</li>
									<li>
										<input type="submit" name="" value="View Review" style="width: 100%;">
									</li>



								</ul>

							</div>



					</div>

 					</div>
 				</div>

 				<div class="span3">
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
