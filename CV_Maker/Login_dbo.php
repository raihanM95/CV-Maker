<?php
session_start();

include_once("config.php");

if(isset($_POST["login"])){
	$query = "SELECT 'username', 'password' FROM login WHERE username = '$_POST[username]' AND password = '$_POST[password]'";

	$result = mysqli_query($con, $query);
	$count = mysqli_num_rows($result);
	
	if($count == 1){
		unset($_SESSION['errorMessage']);
		$_SESSION['username'] = "$_POST[username]";
		header("Location:index_In.php");
	}
	else{
		$_SESSION['errorMessage'] = 1;
		header("Location:Login.php");
	}
	mysqli_close($con);
}

if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header("Location:Login.php");
}
?>