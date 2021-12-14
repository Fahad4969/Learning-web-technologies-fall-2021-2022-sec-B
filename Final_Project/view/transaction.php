<?php
	
	session_start();
    include('../controller/db.php');
$sql = "SELECT * FROM transaction";
$select = mysqli_query($conn, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Transaction History</title>
</head>
<body style="background-color:Silver;">

<?php
	
	include('header.php');
?>
<h2 align="center">Add Transaction History</h2>
<form action="../controller/insert4.php" method="post" onsubmit="return Validation()">
<table  width="100%" style="background-color: #FFFFFF7F" >
		                                 <tr><td><h3>Add Transaction History</h3></td></tr>
                                            <tr><td>
                                                <h3>Date: </h3><br><br>
                                                <input type="date" name="date" id="date"><br><br>
                                                </td>
                                                <td>

                                                <h3>Account Name: </h3><br><br>
                                                <input type="text" name="name" id="name"> <br><br>
</td>
<td>

                                                <h3>Type: </h3><br><br>
                                                <input type="text" name="type" id="type"> <br><br>
</td>
<td>

                                                <h3>Amount </h3><br><br>
                                                <input type="text" name="amount" id="amount"><br><br>
                                                </td>
                                                <td>
                                                <h3>Status </h3><br>

                                                <select name="status" id="status">
							<option>Pending</option>
							<option>Confirmed</option>
							<option>Cancel</option>

						</select>
                                                <td>
                                                <input type="submit" name="submit" value="Insert Row"></h3>
                                            </td>
											<tr><td></td></tr>

                                        </table>

</form>
		<table border="2" style="width: 100%;">
<colgroup>
  <col span="7" style="background-color: #D6EEEE">
</colgroup>
<tr>
<th>Account ID</th>
<th>Date</th>
<th>Account Name</th>
<th>Type</th>
<th>Amount</th>
<th>Status</th>
<th>Delete</th>

</tr>
<?php


    while ($data = mysqli_fetch_array($select)) {
?>
        <tr>
      <td><?php echo $data['ID']; ?></td>
      <td><?php echo $data['Date']; ?></td>
      <td><?php echo $data['AcName']; ?></td> 
      <td><?php echo $data['Type']; ?></td>   
      <td><?php echo $data['Amount']; ?></td>  
      <td><?php echo $data['Status']; ?></td>    
  
 
      <td align="center"><a href="../controller/delete2.php?id=<?php echo $data['ID']; ?>">Delete</a></td>
    </tr>	
  <?php
  }
  ?>
  </table>
	</form>
    <script>
		function Validation()
		{
			const date = document.getElementById('date').value;
			const name = document.getElementById('name').value;
            const name = document.getElementById('type').value;

			const amount = document.getElementById('amount').value;
            const status = document.getElementById('status').value;


			let errorflag =false;

			if(date == '' ||name == '' || type == '' || amount == ''  || status == '')
			{
				alert('Null Submission');
				errorflag=true;
			}
</script>
</body>
</html>