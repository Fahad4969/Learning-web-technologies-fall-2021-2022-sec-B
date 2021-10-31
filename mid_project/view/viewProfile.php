<?php
	if(isset($_COOKIE['flag'])){
?>


<html>
<head>
	<title>Profile</title>
</head>
<body style="background-color:Silver;">

<?php
	
	include('header.php');
?>
<a href="home.php">BACK TO HOME</a>

		</table>
		

</table>
		<hr>
		<table  align= "center" border="1" width="80%" >
			<tr>
				
				<td>
					<table width="100%">
						<tr>
							<td>
								Name  
							</td>
							<td>
								:  Fahad Mollah
							</td>
							<td rowspan="8" align="center">
								<img src="../asset/fahad.jpg" width="150px"> 
							</td>
						</tr>
                        <tr>
							<td>
							   <br/>
							</td>
						
						</tr>

						<tr>
							<td>
								Email  
							</td>
							<td>
								:  fahadmollah43@gmail.com
							</td>
						</tr>
                        <tr>
							<td>
							   <br/>
							</td>
						<tr>
							<td>
								Phone  
							</td>
							<td>
								:  01709114198
							</td>
						</tr>
						<tr>
							<td>
							   <br/>
							</td>
						<tr>
							<td>
								Gender 
							</td>
							<td>
								:  Male
							</td>
						</tr>
                        <tr>
							<td>
							   <br/>
							</td>
						<tr>
							<td>
								Date of Birth
							</td>
							<td>
								:  19 February 1999
							</td>
						</tr>
                        <tr>
							<td>
							   <br/>
							</td>
						<tr>
							<td>
								Department 
							</td>
							<td>
								:  Fund Manager
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