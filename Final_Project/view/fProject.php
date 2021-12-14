<?php
	
	session_start();
    include('../controller/db.php');
    $sql = "SELECT * FROM project";
    $select = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Running Project</title>
</head>
<body style="background-color:Silver;">

<?php
	
	include('header.php');
?>
<h1 align="center">Finished Project</h1>

<form action="../controller/insert2.php" method="post" onsubmit="return Validation()">
<table  width="100%" style="background-color: #FFFFFF7F" >
		                                 <tr><td><h2>Insert Project Record</td></tr>
                                            <tr><td>
                                                <h3>Project Title: </h3><br><br>
                                                <input type="text" name="title" id="title"><br><br>
                                                </td>
                                                <td>

                                                <h3>Category: </h3><br><br>
                                                <input type="text" name="category" id="category"> <br><br>
</td>

<td>

                                                <h3>Earned Profit: </h3><br><br>
                                                <input type="text" name="e_p" id="e_p"><br><br>
                                                </td>
                                                <td>
                                                <input type="submit" name="submit" value="Insert Row"></h3>
                                            </td>
											<tr><td></td></tr>

                                        </table>

</form>


		<table border="1" style="width: 100%;">
<colgroup>
  <col span="6" style="background-color: #D6EEEE">
</colgroup>
<tr>
<th>Project ID</th>
<th>Project Title</th>
<th>Category</th>
<th>Earned Profit</th>
<th>Delete</th>

</tr>
<?php


    while ($data = mysqli_fetch_array($select)) {
?>
      <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['Project_Title']; ?></td>
    <td><?php echo $data['Category']; ?></td> 
    <td><?php echo $data['Earned_Profit']; ?></td>    
    <td align="center"><a href="../controller/delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>
</form>
<script>
		function Validation()
		{
			const title = document.getElementById('title').value;
			const category = document.getElementById('category').value;
			const e_p = document.getElementById('e_p').value;

			let errorflag =false;

			if(title == '' || category == '' || e_p == '')
			{
				alert('Null Submission');
				errorflag=true;
			}
</script>
</body>
</html>