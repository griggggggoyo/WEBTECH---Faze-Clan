<!doctype html>
<html lang="en-US">
	
<!-- Mirrored from skywarriorthemes.com/gameaddict/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Oct 2017 09:33:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>G A M E S  D O I</title>
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
		<link rel="stylesheet" id="custom-style-css"  href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700italic,700,800,800italic" type="text/css" media="all" />
		<link href="css/menubar.css" rel="stylesheet">
	</head>

	<?php 

		session_start();

		if ($_SESSION['userTypeID'] != 1) {

			header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/WEBTECH_index.php");
			
		}

	?>

	<body class="home page page-id-26 page-template page-template-tmp-no-title-php">
		
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
								<li><a href="logout.php">Log-out</a></li>
								<li><a>About Us</a></li>
							</ul>
						</li>
					</ul>
					</div>
				</div>
			</div>
			</form>
			<!-- End Social logos -->
			<div class="clear"></div>
		</div>
		<!-- NAVBAR -->

		<div class="page normal-page container">
			<div class="block span13 first cf">

				<div class="wcontainer block">

					<table cellpadding="0" cellspacing="0" width="100%">

						<tbody>

							<tr>

								<td align="center">

									<img src="img/logo.png" alt="logo"  />

								</td>

							</tr>

							<tr>

								<td align="center">

									<h2>For gamers, by gamers. </h2>
									<p><p>

								</td>

							</tr>

							<tr>

								<td align="center">

									<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactForm" class="contact" method="POST">

										<label>
										<i class="icon-search"></i>&nbsp;&nbsp;
										<input placeholder="Search a game you're thinking of..." id="gamesearch" name="gamesearch" class="input" type="text">
										&nbsp;
										<input type="submit" class="button-small" name="search" value="Search">
										</label>

									</form>

								</td>

							</tr>

						</tbody>

					</table>

				

				<!-- BREAK top is search, bottom is genres !-->

				

					<table cellpadding="0" cellspacing="0" width="100%">

						<tbody>

							<tr>

								<td align="center">

									<h2>Search by popular genres</h2>
									<br>

								</td>

							</tr>

						</tbody>

					</table>

				

					<ul class="newsbh">

						<li class="newsch-item">
							<div class="newsb-thumbnail">
								<a rel="bookmark" href="WEBTECH_viewResults.html">
								<img src="../wp-content/uploads/2013/08/11-287x222.jpg">
								<span class="overlay-link"></span>
								</a>
							</div>
						</li>

						<li class="newsch-item">
							<div class="newsb-thumbnail">
								<a rel="bookmark" href="WEBTECH_viewResults.html">
								<img src="../wp-content/uploads/2013/08/11-287x222.jpg">
								<span class="overlay-link"></span>
								</a>
							</div>
						</li>

						<li class="newsch-item">
							<div class="newsb-thumbnail">
								<a rel="bookmark" href="WEBTECH_viewResults.html">
								<img src="../wp-content/uploads/2013/08/11-287x222.jpg">
								<span class="overlay-link"></span>
								</a>
							</div>
						</li>

						<li class="newsch-item">
							<div class="newsb-thumbnail">
								<a rel="bookmark" href="WEBTECH_viewResults.html">
								<img src="../wp-content/uploads/2013/08/11-287x222.jpg">
								<span class="overlay-link"></span>
								</a>
							</div>
						</li>

						<li class="newsch-item">
							<div class="newsb-thumbnail">
								<a rel="bookmark" href="WEBTECH_viewResults.html">
								<img src="../wp-content/uploads/2013/08/11-287x222.jpg">
								<span class="overlay-link"></span>
								</a>
							</div>
						</li>

						<li class="newsch-item">
							<div class="newsb-thumbnail">
								<a rel="bookmark" href="WEBTECH_viewResults.html">
								<img src="../wp-content/uploads/2013/08/11-287x222.jpg">
								<span class="overlay-link"></span>
								</a>
							</div>
						</li>

						<li class="newsch-item">
							<div class="newsb-thumbnail">
								<a rel="bookmark" href="WEBTECH_viewResults.html">
								<img src="../wp-content/uploads/2013/08/11-287x222.jpg">
								<span class="overlay-link"></span>
								</a>
							</div>
						</li>

						<li class="newsch-item">
							<div class="newsb-thumbnail">
								<a rel="bookmark" href="WEBTECH_viewResults.html">
								<img src="../wp-content/uploads/2013/08/11-287x222.jpg">
								<span class="overlay-link"></span>
								</a>
							</div>
						</li>

						<li class="newsch-item">
							<div class="newsb-thumbnail">
								<a rel="bookmark" href="WEBTECH_viewResults.html">
								<img src="../wp-content/uploads/2013/08/11-287x222.jpg">
								<span class="overlay-link"></span>
								</a>
							</div>
						</li>

						<li class="newsch-item">
							<div class="newsb-thumbnail">
								<a rel="bookmark" href="WEBTECH_viewResults.html">
								<img src="../wp-content/uploads/2013/08/11-287x222.jpg">
								<span class="overlay-link"></span>
								</a>
							</div>
						</li>

						<li class="newsch-item">
							<div class="newsb-thumbnail">
								<a rel="bookmark" href="WEBTECH_viewResults.html">
								<img src="../wp-content/uploads/2013/08/11-287x222.jpg">
								<span class="overlay-link"></span>
								</a>
							</div>
						</li>

						<li class="newsch-item">
							<div class="newsb-thumbnail">
								<a rel="bookmark" href="WEBTECH_viewResults.html">
								<img src="../wp-content/uploads/2013/08/11-287x222.jpg">
								<span class="overlay-link"></span>
								</a>
							</div>
						</li>

					</ul>

					<div class="clear"></div>
				</div>

				<div class="wcontainer block">

					<div align="center">

						<h2>Admin Fuctionality</h2>

						<h3><a href="addGame.php">Add Game</a></h3>

					</div>

				</div>

				<!-- break !-->

				<div class="wcontainer block">

					<table cellpadding="0" cellspacing="0" width="100%">

						<tbody>

							<tr>

								<td align="center">

									<h2>Browse Categories</h2>
									<br>

								</td>

							</tr>

						</tbody>

					</table>

					<table cellpadding="0" cellspacing="0" width="100%">

						<thead>

							<tr>

								<td align="center" width="33.3%"><h3>Most Viewed<h3></td>
								<td align="center" width="33.3%"><h3>Highest Rated<h3></td>
								<td align="center" width="33.3%"><h3>New & Popular<h3></td>

							<tr>

						</thead>

						<tbody>

							<tr>

								<td><a href="WEBTECH_viewGame.html"><div class="categorythumb"><img src="../wp-content/uploads/pubg.png"></div><div class="gamedesccat"><h4>PLAYERUNKNOWN'S BATTLEGROUNDS</h4></div></a></td>
								<td><a href="WEBTECH_viewGame.html"><div class="categorythumb"><img src="../wp-content/uploads/cuphead.jpg"></div><div class="gamedesccat"><h4>CUPHEAD</h4></div></a></td>
								<td><a href="WEBTECH_viewGame.html"><div class="categorythumb"><img src="../wp-content/uploads/cuphead.jpg"></div><div class="gamedesccat"><h4>CUPHEAD</h4></div></a></td>

							</tr>

							<tr>

								<td><a href="WEBTECH_viewGame.html"><div class="categorythumb"><img src="../wp-content/uploads/cuphead.jpg"></div><div class="gamedesccat"><h4>CUPHEAD</h4></div></a></td>
								<td><a href="WEBTECH_viewGame.html"><div class="categorythumb"><img src="../wp-content/uploads/warframe.png"></div><div class="gamedesccat"><h4>WARFRAME</h4></div></a></td>
								<td><a href="WEBTECH_viewGame.html"><div class="categorythumb"><img src="../wp-content/uploads/2k18.png"></div><div class="gamedesccat"><h4>NBA 2K18</h4></div></a></td>

							</tr>

							<tr>

								<td><a href="WEBTECH_viewGame.html"><div class="categorythumb"><img src="../wp-content/uploads/csgo.png"></div><div class="gamedesccat"><h4>COUNTER STRIKE: <br>GLOBAL OFFENSIVE</h4></div></a></td>
								<td><a href="WEBTECH_viewGame.html"><div class="categorythumb"><img src="../wp-content/uploads/fortnite.png"></div><div class="gamedesccat"><h4>FORTNITE</h4></div></a></td>
								<td><a href="WEBTECH_viewGame.html"><div class="categorythumb"><img src="../wp-content/uploads/d2.png"></div><div class="gamedesccat"><h4>DESTINY 2</h4></div></a></td>

							</tr>

							<tr>

								<td><a href="WEBTECH_viewGame.html"><div class="categorythumb"><img src="../wp-content/uploads/2k18.png"></div><div class="gamedesccat"><h4>NBA 2K18</h4></div></a></td>
								<td><a href="WEBTECH_viewGame.html"><div class="categorythumb"><img src="../wp-content/uploads/rocketleague.png"></div><div class="gamedesccat"><h4>ROCKET LEAGUE</h4></div></a></td>
								<td><a href="WEBTECH_viewGame.html"><div class="categorythumb"><img src="../wp-content/uploads/warhammer.png"></div><div class="gamedesccat"><h4>WARHAMMER 2</h4></div></a></td>

							</tr>

							<tr>

								<td><a href="WEBTECH_viewGame.html"><div class="categorythumb"><img src="../wp-content/uploads/fortnite.png"></div><div class="gamedesccat"><h4>FORTNITE</h4></div></td>
								<td><a href="WEBTECH_viewGame.html"><div class="categorythumb"><img src="../wp-content/uploads/csgo.png"></div><div class="gamedesccat"><h4>COUNTER STRIKE: <br>GLOBAL OFFENSIVE</h4></div></a></td>
								<td><a href="WEBTECH_viewGame.html"><div class="categorythumb"><img src="../wp-content/uploads/f7.jpg"></div><div class="gamedesccat"><h4>FORZA MOTORSPORT 7</h4></div></a></td>

							</tr>

						</tbody>

					</table>

				</div>

				<!-- BREAK !-->

				<div class="title-wrapper">
					<h3 class="widget-title">top critics</h3>
					<div class="clear"></div>
				</div>

				<div class="wcontainer block">
					
					<a class="normal" href="WEBTECH_userProfile.html">
					<div class="block block-four_block span4  cf">
						<div class="text-container centered bgpattern charblock maxed">
							<span class="top-critic"><img class="img-circles" src="../wp-content/uploads/greg.jpg"></span>
							<h2 class="normalh2">GREGORY PETROLA</h2>
							<i>@G0YO6969</i>
							<br>
							<p>Lumilipad nanaman ang isip ko, na para bang akoy nasa kalangitan.</p>
							<p></p>
						</div>
					</div>
					</a>

					<a class="normal" href="WEBTECH_userProfile.html">
					<div class="block block-four_block span4  cf">
						<div class="text-container centered bgpattern charblock maxed">
							<span class="top-critic"><img class="img-circles" src="../wp-content/uploads/greg.jpg"></span>
							<h2 class="normalh2">GREGORY PETROLA</h2>
							<i>@G0YO6969</i>
							<br>
							<p>Sa twing' si Goyo ay aking matitikman, ang simoy ng hangin saakin ay lumalamig na.</p>
							<p></p>
						</div>
					</div>
					</a>

					<a class="normal" href="WEBTECH_userProfile.html">
					<div class="block block-four_block span4  cf">
						<div class="text-container centered bgpattern charblock maxed">
							<span class="top-critic"><img class="img-circles" src="../wp-content/uploads/greg.jpg"></span>
							<h2 class="normalh2">GREGORY PETROLA</h2>
							<i>@G0YO6969</i>
							<br>
							<p>Gusto mo bang tikman, nang maranasan mo ang sinasabi ko sayo.</p>
							<p></p>
						</div>
					</div>
					</a>

					<div class="clear"></div>

					<a class="normal" href="WEBTECH_userProfile.html">
					<div class="block block-four_block span4  cf">
						<div class="text-container centered bgpattern charblock maxed">
							<span class="top-critic"><img class="img-circles" src="../wp-content/uploads/greg.jpg"></span>
							<h2 class="normalh2">GREGORY PETROLA</h2>
							<i>@G0YO6969</i>
							<br>
							<p>Na para kang nandun sa alapaap, at ang sarap ng usok parang ulap.</p>
							<p></p>
						</div>
					</div>
					</a>

					<a class="normal" href="WEBTECH_userProfile.html">
					<div class="block block-four_block span4  cf">
						<div class="text-container centered bgpattern charblock maxed">
							<span class="top-critic"><img class="img-circles" src="../wp-content/uploads/greg.jpg"></span>
							<h2 class="normalh2">GREGORY PETROLA</h2>
							<i>@G0YO6969</i>
							<br>
							<p>Diko mapigilan mapangiti, parang kinikiliti. Sindihan na natin at muli nating lasapin, ang kakaibang dulot nya</p>
							<p></p>
						</div>
					</div>
					</a>

					<a class="normal" href="WEBTECH_userProfile.html">
					<div class="block block-four_block span4  cf">
						<div class="text-container centered bgpattern charblock maxed">
							<span class="top-critic"><img class="img-circles" src="../wp-content/uploads/greg.jpg"></span>
							<h2 class="normalh2">GREGORY PETROLA</h2>
							<i>@G0YO6969</i>
							<br>
							<p>Mahiwagang, Gregory, Goyo Petrola.</p>
							<p></p>
						</div>
					</div>
					</a>

				<div class="clear"></div>
				</div>
			</div>
					<!-- End Latest News -->
					<!-- Adventure News -->
					
					
					
					<!-- End Tabs -->
				</div>
				</div>
			</div>
		</div>
		<footer class="container">
			<div class="span12">
					<div class="first footer_widget span3">
						<div class="title-wrapper">
							<a href="WEBTECH_aboutUs.html">
							<h3 class="widget-title">About Us</h3>
							</a>
							<div class="clear"></div>
						</div>
						<div class="latest-twitter-tweet"></div>
						
					</div>

				
			</div>
			<div class="copyright span12">
				<p>© &nbsp;Made by Skywarrior Themes.&nbsp;</p>
			</div>
		</footer>
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

<?php
	// gamesearch
	// search
	// echo "<script type='text/javascript'>alert('Current User ID Session: $param');</script>";
	// <a class="button-small" href="WEBTECH_viewResults.html">Search</a>


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
	

	if (isset($_POST['search'])){
		//echo "<script type='text/javascript'>alert('Please put something in hte textbox!!!');</script>";

		if(empty($_POST["gamesearch"]) || containsWord($_POST["gamesearch"]) == 'false'){
			echo "<script type='text/javascript'>alert('Please put something in hte textbox!!!');</script>";
		}

		if(!empty($_POST["gamesearch"]) && containsWord($_POST["gamesearch"]) == 'true'){
			echo "<script type='text/javascript'>alert('You re making progress,Goyo!!!');</script>";

			// SESSION variable that saves inputted
			$_SESSION["searchName"] = $_POST["gamesearch"];


			$temp = $_SESSION["searchName"];
			echo "<script type='text/javascript'>alert('You are now searching for:  $temp');</script>";
		}
	}
?>