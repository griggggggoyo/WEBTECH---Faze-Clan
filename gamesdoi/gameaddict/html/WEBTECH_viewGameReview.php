<!doctype html>
<html lang="en-US">
<!--up-->
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
			<div class="block block-contactform_block span12 first cf">
				<div class="title-wrapper">
					<h3 class="widget-title">Game</h3>
						<div class="clear"></div>
					</div>
				</div>
		<div class="span12" style=" border-bottom: 1px solid black; margin-bottom: 20px;">

			<div style="font-weight: bold; font-size: 28px; float: right; padding-right: 40px; padding-top: 20px; font-family: Open Sans;">Rating: 3.7</div>
			<div class="span4">
				<h1>Bioshock</h1>
			<b>by 2K Games</b> <br>
			Category: FPS <br>
			Cost: $99,999 <br>
			Platform: PS3, XBOX 360, PC <br>
			Date Released: XXX,99,9999 <br>
			<br>
			</div>
		</div>
			<br>

		</div>

		<div class="span12" style=" border-bottom: 1px solid black; margin-bottom: 20px;">
			<h1>TITLE OF REVIEW</h1>
			<label>BY : *NAME OF REVIEWER</label>
			*INSERT THE CONTENTS OF REVIEW HERE* *INSERT THE CONTENTS OF REVIEW HERE* *INSERT THE CONTENTS OF REVIEW HERE* *INSERT THE CONTENTS OF REVIEW HERE*
			*INSERT THE CONTENTS OF REVIEW HERE* *INSERT THE CONTENTS OF REVIEW HERE* *INSERT THE CONTENTS OF REVIEW HERE* *INSERT THE CONTENTS OF REVIEW HERE*
			*INSERT THE CONTENTS OF REVIEW HERE* *INSERT THE CONTENTS OF REVIEW HERE* *INSERT THE CONTENTS OF REVIEW HERE* *INSERT THE CONTENTS OF REVIEW HERE*
		</div>

		<div class="block block-contactform_block span12 first cf">
			<div class="title-wrapper">
				<h3 class="widget-title">Comments</h3>
					<div class="clear"></div>
				</div>
					<div class="mcontainer">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactForm" class="contact" method="post" novalidate="novalidate">
					<ul class="contactform controls">
						<li class="input-prepend">

						<?php

							// queries for all the comments of this review
							function getComments($reviewID){
								$dbc=mysqli_connect('localhost','root','DBlifeAF_1','reviewschema');
								$getAllComments = $dbc->query("	SELECT * FROM comment
																WHERE reviewID = $reviewID");
								$fetchAllComments = mysqli_fetch_array($getAllComments);

								foreach($getAllComments as $fetchAllComments){
									$tempCommentText = $fetchAllComments['commentText'];
									showComment($tempCommentText);
								}
							}


							function showComment($PcommentID){
								echo '<div class="wcontainer">
													<img src="icon.png">
													<a href="WEBTECH_userProfile.html"><b class="namereview"> &nbsp;&nbsp;&nbsp;MarvinLA0</b></a>&nbsp; <i> rated it 5 out of 5 </i> <br>



													<div class="ratereview">

														<a class="ups" href="#"><i class="icon-thumbs-up m"></i></a>
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<a href="#"><i class="icon-thumbs-down m"></i></a>

													</div>

													<div style="padding-left: 50px;">
														<p class="comment">'.$PcommentID.'</p>
													</div><p>

													<div class="reviewscore">

														<p><i>Review Score:&nbsp; <b class="posi">+2</b>&nbsp; | &nbsp;<b class="nega">-0</b></i></p>

													</div>

												</div>';
							}

							getComments(2);
						?>


	
					</li>
			   		<li class="input-prepend">
							<span class="add-on"><i class="icon-align-justify"></i></span>
							<textarea name="comments" placeholder="comment something" id="commentsText" rows="2" cols="30" class="required requiredField"></textarea>
							
						</li>

						<li>
							<input type="submit" class="button-green button-small" name="submitcomment" value="Submit Comment">
							<a type="button" class="button-small" style="position: relative; top: 1px; left: 73%">Go Back</a>
						</li>

					</ul>

					<input type="hidden" name="submitted" id="submitted" value="true">

				</form>
			</div>
		</div>

<?php
	//submitcomment
	//  href="WEBTECH_viewGame.html"
	
	$currentReviewID = 1;

	/*
	// queries for all the comments of this review
	function getComments($reviewID){
		$dbc=mysqli_connect('localhost','root','DBlifeAF_1','reviewschema');
		$getAllComments = $dbc->query("	SELECT * FROM comment
										WHERE reviewID = $reviewID");
		$fetchAllComments = mysqli_fetch_array($getAllComments);

		foreach($getAllComments as $fetchAllComments){
			$tempCommentText = $fetchAllComments['commentText'];
		}
	}

	
	function showComment($PcommentID){
		echo '<div class="wcontainer">
							<img src="icon.png">
							<a href="WEBTECH_userProfile.html"><b class="namereview"> &nbsp;&nbsp;&nbsp;MarvinLA0</b></a>&nbsp; <i> rated it 5 out of 5 </i> <br>



							<div class="ratereview">

								<a class="ups" href="#"><i class="icon-thumbs-up m"></i></a>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="#"><i class="icon-thumbs-down m"></i></a>

							</div>

							<div style="padding-left: 50px;">
								<p class="comment">'.$PcommentID.'</p>
							</div><p>

							<div class="reviewscore">

								<p><i>Review Score:&nbsp; <b class="posi">+2</b>&nbsp; | &nbsp;<b class="nega">-0</b></i></p>

							</div>

						</div>';
	}
	*/

	// working
	// function for inserting a comment
	function insertComment($Ptext, $PreviewID, $PuserID){
		// db connection
		$dbc=mysqli_connect('localhost','root','DBlifeAF_1','reviewschema');

		// db query vvv
		$addComment_query = "	INSERT INTO comment(commentText, reviewID, userID)
											VALUES('$Ptext', $PreviewID, $PuserID)";
		$insert_Newcomment = mysqli_query($dbc, $addComment_query);
		// db query ^^^
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


	if(isset($_POST['submitcomment'])){
		echo "<script type='text/javascript'>alert('You are attempting to submit a comment!');</script>";

		//$check_commentBox = htmlspecialchars($_POST['comments']);
		$Pcomment = $_POST['comments'];
		echo "<script type='text/javascript'>alert('<<< $Pcomment >>>!!');</script>";

		
		// if comment CONTAINS something
		if(containsWord($Pcomment) == 'false'){
			echo "<script type='text/javascript'>alert('comment does not contain word!!');</script>";
		}
		
		// if comment DOES NOT contain any text (or if it contains only spaces)
		if(containsWord($Pcomment) == 'true'){
			echo "<script type='text/javascript'>alert('COMMENT contains word!!');</script>";
			insertComment($Pcomment, 2, 1);
		}
	}

	// showComment(1);
?>