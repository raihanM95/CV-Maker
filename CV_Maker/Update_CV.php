<?php
include_once("Update_CV_dbo.php");
include_once("Login_dbo.php");

if(!isset($_SESSION['username'])){
	header("Location:Login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update CV</title>
	<link rel="stylesheet" type="text/css" href="Navigation_bar.css">
	<link rel="stylesheet" type="text/css" href="CV.css">
	<meta name="viewport" content="width=device-width initial-scale=1">
</head>
<body>
	<script type="text/javascript">
		function updateAlert(){
			alert("Successfully updated.");
		}
	</script>
	<form action="Update_CV_dbo.php" method="post" enctype="multipart/form-data">
		<div id="header">
			<ul id="navbar">
				<li class="lists"><a class="options" href="index_In.php">Home</a></li>
				<li class="lists"><a class="options" href="My_CV.php">CV</a>
					<ul id="sub_bar">
						<li class="sub_lists"><a class="sub_options" href="My_CV.php">My CV</a></li>
						<li class="sub_lists"><a class="sub_options" href="Update_CV.php">Update CV</a></li>
					</ul>
				</li>
				<li class="lists"><a class="options" href="#">About</a></li>
				<li class="lists"><a class="options" href="#">Contact</a></li>
				<li id="log_list"><a id="log_option" href="Login_dbo.php?logout='1'">
					<?php if(isset($_SESSION['username'])) echo $_SESSION['username']." "?>Logout
				</a></li>
			</ul>
		</div>
		<div id="update-cv-div"></br>
			<div id="image-div">
				<img src="<?php echo "$image";?>"class="image"></br>
				<input type="file" name="image"></br>
			</div>
			<div id="basic-info-div">
				<label>Name*</label>
				<input type="text" name="name" class="input" value="<?php echo "$name";?>" required>
				<label>Address*</label>
				<input type="text" name="address" class="input" value="<?php echo "$address";?>" required>
				<label>Phone*</label>
				<input type="number" name="phone" class="input" value="<?php echo "$phone";?>" required>
				<label>Skills*</label>
				<input type="text" name="skills" class="input" value="<?php echo "$skill";?>" required>
				<label>Language*</label>
				<label><input type="checkbox" name="language" value="Bangla">Bangla</label>
				<label><input type="checkbox" name="language" value="English">English</label>
			</div>
			<div id="working-exp-div">
				<label>Name of company</label>
				<input type="text" name="companyName" class="input" value="<?php echo "$companyname";?>">
				<label>Start date</label>
				<input type="date" name="CMPYstartDate" class="input" value="<?php echo "$cstartdate";?>">
				<label>Position</label>
				<input type="text" name="position" class="input" value="<?php echo "$cposition";?>">
			</div>
			<div id="education-div">
				<label>Name of University</label>
				<input type="text" name="varsityName" class="input" value="<?php echo "$varsityname";?>">
				<label>CGPA</label>
				<input type="number" step="any" name="cgpa" class="input" value="<?php echo "$cgpa";?>">
				<label>Passing year</label>
				<input type="date" name="varsityPyear" class="input" value="<?php echo "$varsitypyear";?>">
				<label>Name of College</label>
				<input type="text" name="clgName" class="input" value="<?php echo "$collegename";?>">
				<label>GPA</label>
				<input type="number" step="any" name="hscgpa" class="input" value="<?php echo "$hscgpa";?>">
				<label>Passing year</label>
				<input type="date" name="clgPyear" class="input" value="<?php echo "$clgpyear";?>">
				<label>Name of School</label>
				<input type="text" name="sclName" class="input" value="<?php echo "$schoolname";?>">
				<label>GPA</label>
				<input type="number" step="any" name="sscgpa" class="input" value="<?php echo "$sscgpa";?>">
				<label>Passing year</label>
				<input type="date" name="sclPyear" class="input" value="<?php echo "$sclpyear";?>">
			</div></br>
			<div>
				<input type="submit" id="cancel" name="cancel" value="Cancel">
				<input type="submit" id="update" name="update" onclick="updateAlert()" value="Update">
			</div>
		</div>
	</form>
</body>
</html>