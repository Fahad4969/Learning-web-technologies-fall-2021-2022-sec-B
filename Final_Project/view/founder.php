<?php
	
	session_start();
    include('../controller/db.php');
    $sql = "SELECT * FROM founders";
    $select = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($select);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Founder List</title>
</head>
<body style="background-color:Silver;">

<?php
	
	include('header.php');
?>
<h1 align="center"> List Of Our Founders</h1></br>
<form action="../controller/insert3.php" method="post" onsubmit="return Validation()">
<table  width="100%" style="background-color: #FFFFFF7F" >
		                                 <tr><td><h2>Insert New Founder</h2></td></tr>
                                            <tr><td>
                                                <h3>Company Name: </h3><br>
                                                <input type="text" name="company" id="company"><br>
                                                </td>
                                                <td>

                                                <h3>Ceo: </h3><br>
                                                <input type="text" name="ceo" id="ceo"> <br>
</td>

<td>

                                                <h3>Joined Date: </h3><br>
                                                <input type="date" name="j_d" id="j_d"><br>
                                                </td>
                                                <td>

                                                <h3>Location: </h3><br>
                                                <input type="text" name="loc" id="loc"><br>
                                                </td>
                                                <td>
                                                <input type="submit" name="submit" value="Insert Founder"></h3>
                                            </td>
											<tr><td></td></tr>

                                        </table>

</form>



<table border="1" style="width: 100%;">
<colgroup>
  <col span="6" style="background-color: #D6EEEE">
</colgroup>
<tr>
<th>Founder ID</th>
<th>Company</th>
<th>Ceo</th>
<th>Joined Date</th>
<th>Location</th>
<th>Action</th>

</tr>
<?php

    while ($data = mysqli_fetch_array($select)) {
?>
        <tr>
      <td><?php echo $data['ID']; ?></td>
      <td><?php echo $data['Company_Name']; ?></td>
      <td><?php echo $data['CEO']; ?></td> 
      <td><?php echo $data['Joined_Date']; ?></td> 
      <td><?php echo $data['Location']; ?></td> 
   <td align="center"><a href="../controller/delete1.php?id=<?php echo $data['ID']; ?>">Delete Row</a></td>
   </tr>
<?php

   }

?>
</table>
	</form>
    <script>
		function Validation()
		{
			const company = document.getElementById('company').value;
			const ceo = document.getElementById('ceo').value;
			const j_d = document.getElementById('j_d').value;
            const loc = document.getElementById('loc').value;


			let errorflag =false;

			if(company == '' ||ceo == '' ||j_d == '' || loc == '')
			{
				alert('Null Submission');
				errorflag=true;
			}
</script>
</body>
</html>