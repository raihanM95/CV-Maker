<?php
include_once("Login_dbo.php");

if(isset($_SESSION['username'])){
	header("Location:index_In.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="Navigation_bar.css">
	<meta name="viewport" content="width=device-width initial-scale=1">
</head>
<body>
	<form>
		<div id="header">
			<ul id="navbar">
				<li class="lists"><a class="options" href="index.php">Home</a></li>
				<li class="lists"><a class="options" href="#">About</a></li>
				<li class="lists"><a class="options" href="#">Contact</a></li>
				<li id="log_list"><a id="log_option" href="Login.php">Login</a></li>
			</ul>
		</div>
	</form>
</body>
</html>