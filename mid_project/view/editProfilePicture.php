<?php
	if(isset($_COOKIE['flag'])){
?>


<html>
<head>
<meta charset="utf-8">
	<title>Edit Profile pic</title>
</head>
<body style="background-color:Silver;">

<?php
	
	include('header.php');
?>
<a href="home.php">BACK TO HOME</a>

					<table align="center">
						<tr>
							<td>
								<fieldset>
								<legend>CHANGE PROFILE PICTURE</legend>
								<table>
									<tr>
									<form method="POST" action="../controller/myfile.php" enctype="multipart/form-data">
			                        Image: <input type="file" name="myfile" > <br>
			                        <input type="submit" name="Submit" value="Submit">	
		                            </form>
									</tr>
								</table>	
							</fieldset>
							</td>
						</tr>

					</table>
				</td>
			</tr>
			
		</table>
		<hr>
		<p align="center"> Copyright © 2021 by Get Your Fund</p>
	</form>
</body>
</html>
<?php
 
 }else{
 	header('location: login.html');
 }

?>