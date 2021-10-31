<?php
	if(isset($_COOKIE['flag'])){
?>
<html>
<head>
	<title>Fund</title>
</head>
<body >

<?php
	
	include('header.php');
?>
<a href="home.php">BACK TO HOME</a>

</table>
		
		<table align = "center" style="background-color: purple" border="1" width="70%">
			<tr>
          
						
				<td>
                    <br/> <br/>
                <h1 align= "center"  style="color:white"> <b> Amount Of Our Crowd Funded  = $11985.6 </b> </h1>
                <br/> <br/>

                <center> <img src="../asset/fund.jpg" width="800px" height= "500px"> </center>
                <br/> <br/>

	                <h2 align = "center"> Capital Raised By Year </h2>                    
                    <center> <img src="../asset/graph.png" width="800px" height= "500px"> </center>


                    <h1 align= "center"  > <b> <a style="color:yellow" href="investors.php">See Our Investors</a></b> </h1>

				</td>
            </tr>
</table>
<p align="center"> Copyright © 2021 by Get Your Fund </p>

</body>
</html>
<?php
 
 }else{
 	header('location: login.html');
 }

?>