
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  This is an alert box.
</div>
<?php

	$username = "icaber";
	$pass = "asdf";


	$dbc=mysqli_connect('localhost','root','DBlifeAF_1','gamesdoi');

	$getUsers = $dbc->query("SELECT * 
							FROM user
							WHERE userName = '$username'");
	$fetchUsers = mysqli_fetch_array($getUsers);


	foreach($getUsers as $fetchUsers){
		$userID = $fetchUsers['userID'];
	}

	if($userID != null){
		echo 'User ID: '. $userID;
	}

	if($userI == null){
		echo 'None was found';	
	}

	if(isset($userID)){
		echo 'ID not set';
		
	}
?>


<html>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<td id="LoginWithAjax_SubmitButton" align="center">
				<input class="button-small" name="login" value="Log In" type="submit">
				<input name="lwa_profile_link" value="" type="hidden">
			</td>
		</form>
		
<a href="test2.php">Exia</a>

	</body>
</html>
	
<?php
	if(isset($_POST['login'])){
		header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/test.html");
	}
?>
