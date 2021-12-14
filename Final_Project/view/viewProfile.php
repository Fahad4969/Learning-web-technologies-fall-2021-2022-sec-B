<?php
    session_start();
    include('../controller/db.php');
    include('header.php');
    if(isset($_SESSION['name']))
    {
    $n=$_SESSION['name'];
    $sqlUserCheck = "SELECT * FROM users WHERE name = '$n'";
    $result = mysqli_query($conn, $sqlUserCheck);
    $rowCount = mysqli_num_rows($result);
       $row = mysqli_fetch_assoc($result);
	    $id   = $row['ID'];
        $name   = $row['name'];
        $email  = $row['email'];
        $phonenumber = $row['phone'];
		$gender   = $row['gender'];
		$dob   = $row['dob'];
		$department   = $row['department'];



        

        // setcookie('status', 'true', time()+5000, '/');
    }
?>
<html>
<head>
	<title>Profile</title>
</head>
<body style="background-color:Silver;">
<h2 align= "center"> User Profile </h2>
		<hr>
		<table  align= "center" width="80%" >
			<tr>
			<td><br/>
			    <h4> User ID:  </h4><br/>
    			<h4> Name:  </h4><br/>
    			<h4> Email: </h4><br/>
    			<h4> Phone Number: </h4><br/>
				<h4> Gender:  </h4><br/>
				<h4> Birth Date:  </h4><br/>
				<h4> Department:  </h4><br/>
                
    		</td>
			<td><br/>
			     <h4><?php echo  $id ?> </h4><br/>
    			<h4><?php echo  $name ?> </h4><br/>
    			<h4><?php echo  $email ?> </h4><br/>
    			<h4><?php echo  $phonenumber ?></h4><br/>
				<h4><?php echo  $gender ?> </h4><br/>
				<h4><?php echo  $dob ?> </h4><br/>
				<h4><?php echo  $department ?> </h4><br/>
    		</td>
		</tr>
		<tr>	
  </tr>
		</table>
		<hr>
		<p align="center"> Copyright © 2021 by Get Your Fund</p>
</body>
</html>