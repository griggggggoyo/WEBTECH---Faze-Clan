<!doctype html>
<?php
session_start();

$gameid = $_GET['value'];
echo $gameid;
$_SESSION['gameid']=$gameid;
$userid = 1;
$_SESSION['userid'] = 1;
$name = "title";
$developer = "dev";
$category = "";
$cost = "0";
$platform = "";
$date = "2000-1-1";
$url = "youtube";
$description = "";
$view = "";
$gameplay = "";
$rating = 0;
$dbc = mysqli_connect('localhost','root','','reviewschema');
$query = "select * from reviewschema.game where gameID = {$gameid}";
$result = mysqli_query($dbc,$query);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$name = $row['gameName'];
	$developer = $row['gameDeveloper'];
	$cost = $row['gamePrice'];
	$date = $row['dateReleased'];
	$url = $row['gameVidURLHolder'];
	$description = $row['gameDescription'];

	};
//getting genre
$query = "	select genreName from genre g
			join game gg
			on gg.gameGenre = g.genreID
			where gg.gameID = {$gameid}";
$result = mysqli_query($dbc,$query);
$count =0;
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$count++;
	$temp = $row['genreName'];
	if ($count >1){

			$category = $category .", ". $temp;
	}
	else $category = $temp;
	};

//getting platform
$query = "	select name from platform p
			join game g
			on g.gamePlatform = p.platformID
			where g.gameID = {$gameid}";
$result = mysqli_query($dbc,$query);
$count =0;
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$count++;
	$temp = $row['name'];
	if ($count >1){

			$platform = $platform .", ". $temp;
	}
	else $platform = $temp;
	};
$count =0;
$query = "  SELECT	reviewRating	FROM reviewschema.review
			 where gameID = {$gameid}";
$result = mysqli_query($dbc,$query);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$count++;
	$temp = $row['reviewRating'];
	$rating += $temp;

};
$rating = round($rating/$count, 2);

if (isset($_POST['upvote']) || isset($_POST['downvote'])) {

$queryVote = "SELECT v.upvote, v.downvote FROM vote_list v
			  JOIN review r ON v.reviewID = r.reviewID
			  WHERE r.gameID = '{$_SESSION['gameid']}' AND v.userID = '{$_SESSION['userID']}' AND v.reviewID = '{$_POST['reviewID']}'";

$resultVote = mysqli_query($dbc, $queryVote);
$rowVote = mysqli_fetch_array($resultVote);

}

if (isset($_POST['upvote'])){

	if (empty($rowVote['upvote']) && empty($rowVote['downvote'])) {

		$queryNewvote = "INSERT INTO vote_list (reviewID, userID, upvote, downvote) VALUES ('{$_POST['reviewID']}', '{$_SESSION['userID']}', 1, 0)";

		$resultNewvote = mysqli_query($dbc, $queryNewvote);

		$queryReviewScore = "UPDATE review r JOIN vote_list v ON r.reviewID = v.reviewID SET r.reviewUpvotes = r.reviewUpvotes + 1 WHERE r.gameID = '{$_SESSION['gameid']}' AND v.userID = '{$_SESSION['userID']}' AND v.reviewID = '{$_POST['reviewID']}';";

		$resultReviewScore = mysqli_query ($dbc, $queryReviewScore);
		
	}

	else if ($rowVote['upvote'] == 0 && $rowVote['downvote'] == 1) {

		$queryReviewScore = "UPDATE review r JOIN vote_list v ON r.reviewID = v.reviewID SET r.reviewUpvotes = r.reviewUpvotes + 1, r.reviewDownvotes = r.reviewDownvotes - 1 WHERE r.gameID = '{$_SESSION['gameid']}' AND v.userID = '{$_SESSION['userID']}' AND v.reviewID = '{$_POST['reviewID']}';";

		$resultReviewScore = mysqli_query ($dbc, $queryReviewScore);

		$queryUpvote = "UPDATE vote_list SET upvote = 1, downvote = 0 WHERE userID = '{$_SESSION['userID']}' AND reviewID = '{$_POST['reviewID']}'";

		$resultUpvote = mysqli_query($dbc, $queryUpvote);

	}

}
if (isset($_POST['downvote'])){

	if (empty($rowVote['upvote']) && empty($rowVote['downvote'])) {

		$queryNewvote = "INSERT INTO vote_list (reviewID, userID, upvote, downvote) VALUES ('{$_POST['reviewID']}', '{$_SESSION['userID']}', 0, 1)";

		$resultNewvote = mysqli_query($dbc, $queryNewvote);

		$queryReviewScore = "UPDATE review r JOIN vote_list v ON r.reviewID = v.reviewID SET r.reviewDownvotes = r.reviewDownvotes + 1 WHERE r.gameID = '{$_SESSION['gameid']}' AND v.userID = '{$_SESSION['userID']}' AND v.reviewID = '{$_POST['reviewID']}';";

		$resultReviewScore = mysqli_query ($dbc, $queryReviewScore);
		
	}

	else if ($rowVote['downvote'] == 0 && $rowVote['upvote'] == 1) {

		$queryReviewScore = "UPDATE review r JOIN vote_list v ON r.reviewID = v.reviewID SET r.reviewDownvotes = r.reviewDownvotes + 1, r.reviewUpvotes = r.reviewUpvotes - 1 WHERE r.gameID = '{$_SESSION['gameid']}' AND v.userID = '{$_SESSION['userID']}' AND v.reviewID = '{$_POST['reviewID']}';";

		$resultReviewScore = mysqli_query ($dbc, $queryReviewScore);

		$queryDownVote = "UPDATE vote_list SET upvote = 0, downvote = 1 WHERE userID = '{$_SESSION['userID']}' AND reviewID = '{$_POST['reviewID']}'";

		$resultDownvote = mysqli_query($dbc, $queryDownVote);

	}

}

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

$queryReviews = "SELECT * FROM review r
				 join user u
				 on r.userID = u.userID where gameID = '{$_SESSION['gameid']}'";

$resultReviews = mysqli_query($dbc, $queryReviews);

?>
<html lang="en-US">

<!-- Mirrored from skywarriorthemes.com/gameaddict/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Oct 2017 09:33:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>GAMESDOI | </title>
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
			<div class="span6" style="margin-bottom: 20px;">
				<img src="<?php echo $view?>">
			</div>
			<div style="font-weight: bold; font-size: 28px; float: right; padding-right: 40px; padding-top: 20px; font-family: Open Sans;"><?php echo $rating;?></div>
			<div class="span4">
			<h1 style="margin: 0;"><?php echo $name?></h1>
			<b>by <?php echo $developer?></b> <br>
			Category: <?php echo $category?> <br>
			Cost: <?php echo $cost?> <br>
			Platform: <?php echo $platform?> <br>
			Date Released: <?php echo $date?> <br>
			<br>
			</div>
		</div>

			<br>

		</div>

			<div class="span12">
				<div class="block span12">

				</div>
				<div style="padding-top: 20px;">

					<img src="<?php echo $gameplay?>">
				</div>
				<div style="padding-top: 20px;">
					<p><?php echo $description?></p>
				</div>
				<!--
				<div style="padding-left: 250px;"><iframe width="560" height="315" src="<?php echo $url?>" frameborder="0" allowfullscreen></iframe></div><br><br>
			</div>
		-->
			<div class="block span12 first cf">
					<div class="title-wrapper">
							<h3 class="widget-title">Reviews </h3>
							<div class="clear"></div>
					</div>

					<div id="makereviewbutton">
						<a class="button-small" href="addReview.php"> CREATE REVIEW </a>
					</div>

					<div id="reviewfilter">
						<button class="button-small">VIEW ALL REVIEWS</button> &nbsp;&nbsp;&nbsp;
						<button class="button-small">VIEW MOST UPVOTED</button>
					</div>

					<?php if ($resultReviews) { ?>

					<?php foreach ($resultReviews as $row) { ?>

					<div class="wcontainer">

 						<img src="icon.png">
 						<a href="WEBTECH_userProfile.html"><b class="namereview"> &nbsp;&nbsp;&nbsp;<?php echo $row['userName']; ?></b></a>&nbsp; <i> rated it <?php echo $row['reviewRating'] ?> out of 5 </i> <br>
 						<div class="ratereview">

 							<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">

							<input type="hidden" name="reviewID" value="<?php echo $row['reviewID'] ?>">

 							<button type="submit" name="upvote"><i class="icon-thumbs-up m"></i></button>
 							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<button type="submit" name="downvote"><i class="icon-thumbs-down m"></i></button>

							</form>

 						</div>
 						<div  style="padding-left: 50px;"><p class="comment"><?php echo $row['reviewText'] ?></p></div><p>

 						<div class="reviewscore">

 							<p><i>Review Score:&nbsp; <b class="posi"><?php echo "+" . $row['reviewUpvotes'] ?></b>&nbsp; | &nbsp;<b class="nega"><?php echo "-" . $row['reviewDownvotes'] ?></b></i></p>

 						</div>

 					</div>

 					<?php } ?>

 					<?php } ?>


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
