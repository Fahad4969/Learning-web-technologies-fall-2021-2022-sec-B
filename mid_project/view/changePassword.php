<?php
	if(isset($_COOKIE['flag'])){
?>
<html>
<head>
	<title>Change Password</title>
</head>
<body style="background-color:Silver;">

		
<?php
	
	include('header.php');
?>
<a href="home.php">BACK TO HOME</a>

					<table align="center"  height = "100px">
						<tr>
							<td>
								<fieldset>
									<legend>CHANGE PASSWORD</legend>
									<table>
										<tr>
											<td>Current Password:</td>	
											<td>
												<input type="password" name="cpassword" value="">
											</td>
										</tr>
										<tr>
											<td>New Password:</td>		
											<td>
												<input type="password" name="npassword" value="">
											</td>
										</tr>
										<tr>
											<td>Retype New Password:</td>		
											<td>
												<input type="password" name="rpassword" value="">
												<br>
											</td>
										<tr>
											<td>
											<a href="change.html"><input type="submit" name="submit" value="Change"></a>
											</td>
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