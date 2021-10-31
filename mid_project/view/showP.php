<?php
	if(isset($_COOKIE['flag'])){
?>
<?php
	
	include('header.php');
?>
<a href="home.php">BACK TO HOME</a>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Show Profile Picture</title>
</head>
<body>
	<table align = "center" border="1" width="50%">
<tr >
    <td align="center">
		<h2>Your Profile picture is :</h2>
	<img  src="asset/<?=$_SESSION['myimage']?>"  width='300px' height='300px'>
	</td>
	</tr>
	</table>
		
<?php
 
 }else{
 	header('location: login.html');
 }

?>
</body>
</html>