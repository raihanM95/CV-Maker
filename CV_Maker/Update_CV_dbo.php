<?php
include_once("config.php");
include_once("Login_dbo.php");

$query = mysqli_query($con,"SELECT* FROM cv_info WHERE username = '$_SESSION[username]'");
while($data = mysqli_fetch_array($query)){
	$id = $data['id'];
	$name = $data['name'];
	$address = $data['address'];
	$phone = $data['phone'];
	$email = $data['email'];
	$language = $data['language'];
	$skill = $data['skill'];
	$companyname = $data['companyname'];
	$cstartdate = $data['cstartdate'];
	$cposition = $data['cposition'];
	$varsityname = $data['varsityname'];
	$cgpa = $data['cgpa'];
	$varsitypyear = $data['varsitypyear'];
	$collegename = $data['collegename'];
	$hscgpa = $data['hscgpa'];
	$clgpyear = $data['clgpyear'];
	$schoolname = $data['schoolname'];
	$sscgpa = $data['sscgpa'];
	$sclpyear = $data['sclpyear'];
	$image = $data['image'];
}

if(isset($_POST["update"])){
	// for image
	$destination = "images/".$_FILES["image"]["name"]; 
	$filename = $_FILES["image"]["tmp_name"];
	move_uploaded_file($filename, $destination);
	
	$query = "UPDATE cv_info SET name = '$_POST[name]', address = '$_POST[address]', phone = '$_POST[phone]', language = '$_POST[language]', skill = '$_POST[skills]', companyname = '$_POST[companyName]', cstartdate = '$_POST[CMPYstartDate]', cposition = '$_POST[position]', varsityname = '$_POST[varsityName]', cgpa = '$_POST[cgpa]', varsitypyear = '$_POST[varsityPyear]', collegename = '$_POST[clgName]', hscgpa = '$_POST[hscgpa]', clgpyear = '$_POST[clgPyear]', schoolname = '$_POST[sclName]', sscgpa = '$_POST[sscgpa]', sclpyear = '$_POST[sclPyear]', image = '$destination' WHERE username = '$_SESSION[username]'";

	if(mysqli_query($con, $query)){
		header("Location:My_CV.php");
	}
	else{
		die('Error: ' . mysqli_error());
	}
}
else if(isset($_POST["cancel"])){
	header("Location:My_CV.php");
}

mysqli_close($con);
?>