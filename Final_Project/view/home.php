<?php

session_start();
?>

<html>
<head>
	<title>Home</title>
</head>
<body >

<?php
	
	include('header.php');
    		
    				
    			
?>
	<table style="background-color:Silver;" width="100%" height="100%">
	
	
	<tr>
			<td  width="80%">
			
		
			<img src="../asset/logo.jpg" width="100px">

	
					<h1 align= "center" style="color:blue" background color = "red"> Welcome  <?php echo $_SESSION['name'];?></h1>
				</td>
				<td>
					<table align= "center" style="color: black">
	
					   
							<img src="../asset/success.jpg" width=100% 
						<tr>
							<td><h2>Setup Your Fundraise for Success</h2></td>
						</tr>
						<tr>
							<td>Thousands of startups have used our services to launch their fundraise. Join today to learn the ins and outs of raising investor capital.</td>
						
					</table>
				</td>
			</tr>
		</table>
	</form>
	<p align="center"> Copyright © 2021 by Get Your Fund </p>

</body>
</html>