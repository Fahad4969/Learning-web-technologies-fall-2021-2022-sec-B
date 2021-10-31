<?php
	if(isset($_COOKIE['flag'])){
?>

<html>
<head>
	<title>Home</title>
</head>
<body >

<?php
	
	include('header.php');
?>
		
		<table style="background-color:Silver;" border="1" width="100%" height="500px">
			<tr>
				
			<td  width="80%">
		
			<img src="../asset/logo.jpg" width="100px">

	
					<h1 align= "center" style="color:blue" background color = "red"> Welcome to <br/> GET YOUR FUND!</h1>
				</td>
				<td>
					<table align= "center" style="color: black">
					   <td>
					   <input type="text" placeholder="Search.." >
	<button>
	<img src="../asset/search.png" width="25px" height="25px"></a>
	</button><br/><br/>
							<a href="message.php"><img src="../asset/message.jpg" width="50px" height="50px"><b>Message<b/></a>
						</td>
						<tr>
							<td><br/></td>
						</tr>
						<tr>
							<td><br/></td>
						</tr>
						<tr>
							<td><h2> About US<h2/></td>
						</tr>
						<tr>
							<td>Loreal Ipsum</td>
						</tr>
						<tr>
							<td>Loreal Ipsum</td>
						</tr>
						<tr>
							<td>Loreal Ipsum</td> 
						</tr>
						<tr>
							<td><br/></td>
						</tr>
						<tr>
							<td><br/></td>
						</tr>
						<tr>
							<td><h2>Contract<h2/></td>
						</tr>
						<tr>
							<td>Loreal Ipsum</td>
						</tr>
						<tr>
							<td>Loreal Ipsum</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</form>
	<p align="center"> Copyright © 2021 by Get Your Fund </p>

</body>
</html>
<?php
 
 }else{
 	header('location: login.html');
 }

?>