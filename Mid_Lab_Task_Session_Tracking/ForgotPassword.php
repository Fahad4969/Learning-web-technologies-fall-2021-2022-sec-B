<?php
session_start();

	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		

		if ($ea<!DOCTYPE html>
		<html>
		<head>
			<title>Home</title>
		</head>
		<body>
			<form method="post" action="forget_password_check.php">
							<table border="1" width="100%">
								<tr height="100px">
									
									 <td >
										 <img src="Capture.png">
										<span style="float: right;"> <a href="Home.html" style="color: blue">Home</a>|<a href="login.html" style="color: blue">Login</a>| <a href="registration.html" style="color: blue">Registration</a> </span>
									</td>
		
								</tr>
								<tr height="300px">
									<td align="center">
					<fieldset  style="width: 300px">
						<legend><b>FORGET PASSWORD</b></legend>
							<table >
								<tr>
									
									 <td>
										Enter Email :
									</td>
									<td> <input type="text" name="email" value="">
									</td>	
								</tr>
								
		
								
							</table>
							<hr width="100%" align="left">
		
							
							<input type="submit" name="submit" value="Submit">
							
								
								
					</fieldset> 
									</td>
									
								</tr>
								<tr>
									<td>
										<p align="center">Copyright © 2017</p> 
									</td>
								</tr>
		
								
							</table>
						
			</form>
			
		</body>
		</html>mail == "") {

			echo "Null Submission";
		}
		else{
			$user = $_SESSION['user'];
			if ($email == $user['email'] ) {
				 echo "Your Current Password is : ";
				print_r($user['password']);
			}
			else{
				echo "Invaid User";
			}
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Recover Forget Password</title>
</head>
<body>
	<br/>
	<a href="login.html" style="color: red">LOG IN</a>

</body>
</html>