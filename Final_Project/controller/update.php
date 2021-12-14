<?php

include 'dbcon.php';

if(isset($_POST['submit']))
	{
        $name = $_POST['name'];
        $email = $_POST['email'];
		$phone = $_POST['phone'];
        $gender	= $_POST['gender'];
        $password = $_POST['password'];
        $dob = $_POST['dob'];
		$position = $_POST['position'];


		$id = $_GET['id'];

			$sql = "UPDATE users SET `name`=$name,`password`=$passwor`,email`=$email,`phone`=$phone,`dob`=$dob,`department`=$position WHERE id = $id";
			$result = mysqli_query($conn, $sql);

		header('location: editProfile.php');
	}

?>
