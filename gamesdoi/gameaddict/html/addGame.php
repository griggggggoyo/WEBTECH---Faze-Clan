<!doctype html>
<html lang="en-US">

<!-- Mirrored from skywarriorthemes.com/gameaddict/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Oct 2017 09:33:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<script src="../bower_components/webcomponentsjs/webcomponents-lite.js"></script>
	<link rel="import" href="../bower_components/polymer/polymer-element.html">
	<link rel="import" href="../bower_components/paper-search/paper-search.html">
	<link rel="import" href="../bower_components/paper-search-panel/paper-search-panel.html">
	<link rel="import" href="../bower_components//paper-search-bar/paper-search-bar.html">
	<link rel="import" href="../bower_components/paper-input/paper-input.html">
	<link rel="import" href="../bower_components/paper-button/paper-button.html">
	<link rel="import" href="../bower_components/iron-autogrow-textarea/iron-autogrow-textarea.html">
	<link rel="import" href="../bower_components/vaadin-date-picker/vaadin-date-picker.html">
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
					<paper-search-panel></paper-search-panel>
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
			<div class="title-wrapper">
				<h3 class="widget-title">Add Game</h3>
					<div class="clear"></div>
			</div>
		<div class="span12" style=" border-bottom: 1px solid black; margin-bottom: 20px;">
		</div>
		<div class=span2></div>
		<div style="padding-left:50px;" class="span8">
			<form action="addGameToDB.php" method ="POST">
				<fieldset>
		      <table >
		      <tr>
		      	<td>
							<paper-input name='name' always-float-label label='Name of Game' ></paper-input>
						</td>
					</tr>

					<td><paper-input name='genre' always-float-label label='Genre' ></paper-input>
				 </tr>
				 <tr>
				 <td>
					 	<paper-input name='developer' always-float-label label='Developer' ></paper-input>
				 </td>
				 </tr>
				 <tr>
					 <td><label style="font-size: 11px;">Date Developed</label><vaadin-date-picker></vaadin-date-picker></td>
				 </tr>

		      <td ><label style="font-size: 11px;">Game Description<br><iron-autogrow-textarea ></iron-autogrow-textarea><br>
		      </tr>

					
				</table>

				</fieldset>
			<div align = "center"><input type="submit" name="submit" value="Add Game">
			<input type="submit" name="submit" value="Cancel"></div>
                        </form>
		</div>



			<br>

		</div>
