<?php

require_once('db.php');
$username = $password =  '';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["id"];
		$name = $row["name"];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['name'] = $name;
	}
	header("Location: ../view/home.php");
}
else
{
	echo "Invalid email or password";
}
?>