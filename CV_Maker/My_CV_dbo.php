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

mysqli_close($con);
?>