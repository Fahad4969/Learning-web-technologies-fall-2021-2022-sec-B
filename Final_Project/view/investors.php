<?php
	
session_start();
include('../controller/db.php');
$sql = "SELECT * FROM investors";
$select = mysqli_query($conn, $sql);
$num_rows = mysqli_num_rows($select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Investors</title>
</head>
<body style="background: url(../asset/investor.jpg); ">
<?php
	
	include('header.php');
?>
<h1 align="center">Investors</h1>

<form action="../controller/insert5.php" method="post" onsubmit="return Validation()">
<table  width="100%" style="background-color: #FFFFFF7F" >
		                                 <tr><td><h2>Insert Investor</td></tr>
                                            <tr><td>
                                                <h3>Name: </h3><br><br>
                                                <input type="text" name="name" id="name"><br><br>
                                                </td>
                                                <td>

                                                <h3>Location: </h3><br><br>
                                                <input type="text" name="loc" id="loc"> <br><br>
</td>

<td>

                                                <h3>Amount Of Investment: </h3><br><br>
                                                <input type="text" name="inv" id="inv"><br><br>
                                                </td>
                                                <td>
                                                <input type="submit" name="submit" value="Insert Row"></h3>
                                            </td>
											<tr><td></td></tr>

                                        </table>

</form>
<table style="width: 100%;">
<colgroup>
  <col span="5" style="background-color: #FFFFFF7F">
</colgroup>
<tr>
			<th>User ID</th>
			<th>NAME</th>
			<th>Location</th>
			<th>Amount of Investment</th>
			<th>Delete</th>
		</tr>
		<?php


    while ($rows = mysqli_fetch_array($select)) {
?>
      <tr>
    <td><?php echo $rows['id']; ?></td>
    <td><?php echo $rows['name']; ?></td>
    <td><?php echo $rows['location']; ?></td> 
    <td><?php echo $rows['investment']; ?></td>    
    <td align="center"><a href="../controller/delete4.php?id=<?php echo $rows['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>
	</form>
	<p align="center"> Copyright © 2021 by Get Your Fund </p>
	<script>
		function Validation()
		{
			const name = document.getElementById('name').value;
			const loc = document.getElementById('loc').value;
			const inv = document.getElementById('inv').value;

			let errorflag =false;

			if(name == '' || loc == '' || inv == '')
			{
				alert('Null Submission');
				errorflag=true;
			}
</script>
</body>
</html>