<?php 
	session_start();
	header('location: ../view/login.php');

	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con, 'webtech');

	$fName = $_POST['name'];
	$uName = $_POST['username'];
	$pass =  $_POST['password'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
	$dept = $_POST['department'];

	$s = "select * from signup where name = '$uName'";

	$result = mysqli_query($con, $s);
    
	$num = mysqli_num_rows($result);

	if($num == 1){
		echo "Username Already Taken";
	}else{
		$reg = " insert into users( name, username, password, email, phone, gender, dob, department) 
	           values ('$fName' , '$uName' , '$pass' , '$email' , '$phone' , '$gender', '$dob', '$dept')";
	 
		mysqli_query($con, $reg); 
		echo "Registration Succesfull"; 
    }
?>