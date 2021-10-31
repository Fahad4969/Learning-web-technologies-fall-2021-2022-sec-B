<?php
	if(isset($_COOKIE['flag'])){
?>

<html>
<head>
	<title>Edit Profile</title>
</head>
<body >

<?php
	
	include('header.php');
?>
<a href="home.php">BACK TO HOME</a>


		<table style="background-color:grey;" align= "center" border="1" width="80%">
			<tr>
				<td>
					<table width="100%">
						<tr> <br/><br/> <br/>
							<td>
								Name <br/><br/> <br/>
							</td>
							<td>
								<input type="text" name="name" value=""><br/><br/> <br/>
							</td>
							<td rowspan="8" align="center">
								<img src="../asset/fahad.jpg" width="150px"> <br/> <br/>
								<a href="editProfilePicture.php">Change Profile Picture</a>
							</td>
						</tr>
						<tr>
							<td>
								Email <br/><br/> <br/>
							</td>
							<td>
								<input type="email" name="email" value=""> <br/><br/> <br/>
							</td>
						</tr>
						<tr>
							<td>
								Phone <br/><br/> <br/>
							</td>
							<td>
								<input type="number" name="phone" value=""> <br/><br/> <br/>
							</td>
						</tr>
					
						</tr>
						<tr>
							<td>
								Date of Birth <br/> <br/> <br/>
							</td>
							<td>
								<input type="date" name="dob" value=""> <br/><br/> <br/>
							</td>
						</tr>
						
				
						<tr>
							<td align="center" colspan="2">
							<a href="change.html"><input type="submit" name="submit" value="Change"></a>
							</td>
						</tr>

					</table>
				</td>
			</tr>
			
		</table>
		<hr>
		<p align="center"> Copyright © 2021 by Get your fund</p>
	</form>
</body>
</html>

<?php
 
 }else{
 	header('location: login.html');
 }

?>