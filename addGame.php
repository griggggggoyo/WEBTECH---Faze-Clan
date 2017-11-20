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
		      	<td><p><b>Name of Game</b><br><input type= "text" id="name" name="name" size="20" maxlength="20" style="width: 500px;"/>
					</tr>
					<tr>
		      	<td><p><b>Genre </b><br>
							<?php 
								$conn = new mysqli("localhost", "root", "marvin", "reviewschema");
							
								if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
									echo "failed";
								} 
								
								$sql = "SELECT genreID, genreName FROM genre";
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
											// output data of each row
											$select =  '<select name="select">';
										  
											while($row = $result->fetch_assoc()) {
												$select.='<option value="'.$row['genreID'].'">'.$row['genreName'].'</option>';
											}
										}
										else {
											echo "0 results";
										}
										$select.='</select>';
										echo $select;
										$conn->close();
										?>
					</tr>
					<tr>
		      <td ><p><b>Game Description</b><br><textarea style="width: 500px;" name="description" id="description" placeholder="Description of the Game"rows="5" cols="20" class="required requiredField"></textarea><br>
		      </tr>
					<tr>
		      <td><p><b>Game Video URL</b><br><input style="width: 500px;" type= "text" name="url"  id="url" size="20" maxlength="140"/>
		      </tr>
				</table>

				</fieldset>
			<div align = "center"><input type="submit" name="submit" value="Add Game">
			<input type="submit" name="submit" value="Cancel"></div>
                        </form>
		</div>



			<br>

		</div>
