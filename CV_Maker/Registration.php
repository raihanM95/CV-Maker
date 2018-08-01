<?php
include_once("Login_dbo.php");

if(isset($_SESSION['username'])){
	header("Location:index_In.php");
}
?>

<!DOCTYPE>
<html>
<head>
	<title>Reg</title>
	<link rel="stylesheet" type="text/css" href="Log_Reg.css">
</head>
<body>
	<script type="text/javascript">
		function regAlert(){
			var password = document.getElementById("psw").value;
			var retpassword = document.getElementById("retpsw").value;

			if(password == retpassword){
				alert("Registration done! Please login");
			}
			else{
				alert("Please input same password");
			}
		}
	</script>
	<form action="registration_dbo.php" method="post">
		<div class="registration">
			<h1>Registration</h1>
			<input type="text" name="username" placeholder="Username" required>
			<input type="email" name="email" placeholder="Email" required>
			<input type="password" name="password" id="psw" placeholder="Password" required>
			<input type="password" name="retpassword" id="retpsw" placeholder="Retype password" required>
			<label>Birthday</label>
			<input type="date" name="dob" required>
		</div>
		<div class="reginfo">
			<div>
				<input type="radio" name="gender" value="male">Male</input>
				<input type="radio" name="gender" value="female">Female</input>
			</div>
			<div>
				<label>
					<input type="checkbox" name="terms">I agree with the<a href="#"> Terms and Conditions</a>
				</label>
			</div>
			<div>
				<input type="submit" name="submit" onclick="regAlert()" value="Sign Up">
			</div>
		</div>
	</form> 
</body>
</html>