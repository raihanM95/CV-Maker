<?php
include_once("Login_dbo.php");

if(isset($_SESSION['username'])){
	header("Location:index_In.php");
}
?>

<!DOCTYPE>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="Log_Reg.css">
</head>
<body>
	<form action="Login_dbo.php" method="post">
		<div class="login-box">
			<img src="Image/avatar.png" id="avatar">
			<h1>Sign In</h1>
			<img src="Image/user.png" id="icon">
			<input type="text" name="username" placeholder="Username" required>
			<img src="Image/lock.png" id="icon2">
			<input type="password" name="password" id="password" placeholder="Password" required>
			<?php
			/* display validation error here */
			if (isset($_SESSION['errorMessage'])){
				echo "<span style='color:red; padding:20px;'>Invalid username or password!</span>";
			}
			?>
			<input type="submit" name="login" value="Login" onclick="logAlert()">
			<a href="#">Forgot Password?</a>
		</div>
		<section id="line"></section>
		<div class="reg-link">
			<label>Don't have a account?</label>
			<a href="Registration.php">REGISTER HERE</a>
		</div>
	</form>
</body>
</html>