<?php
	
	session_start();
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Running Project</title>
</head>
<body style="background-color:Silver;">

<div id="wrapper">
<?php
	
    include('../controller/db.php');
    $sql = "SELECT * FROM project";
    $select = mysqli_query($conn, $sql);

?>


<?php
	
	include('header.php');
?>
<form action="../controller/insert1.php" method="post">
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

                                                <h3>Start Date: </h3><br><br>
                                                <input type="date" name="s_d" id="s_d"> <br><br>
</td>
<td>

                                                <h3>Expected End Date: </h3><br><br>
                                                <input type="date" name="e_d" id="e_d"><br><br>
                                                </td>
                                                <td>
                                                <input type="submit" name="submit" value="Insert Row"></h3>
                                            </td>
											<tr><td></td></tr>

                                        </table>

</form>

<table border="1" style="width: 100%;">
<colgroup>
  <col span="7" cellpadding="10" style="background-color: #D6EEEE" id="user_table">
</colgroup>
<tr>
<th>Project ID</th>
<th>Project Title</th>
<th>Category</th>
<th>Start Date</th>
<th>Expected End Date</th>
<th>Action</th>

<?php


    while ($data = mysqli_fetch_array($select)) {
?>
      <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['Project_Title']; ?></td>
    <td><?php echo $data['Category']; ?></td> 
    <td><?php echo $data['Start_Date']; ?></td> 
    <td><?php echo $data['End_Date']; ?></td>    
   
    <td align="center"><a href="../controller/delete5.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>
</table>

</div>

<script>
		
		function Validation()
            {
                const title = document.getElementById('title').value;
                const category = document.getElementById('category').value;
                const s_d = document.getElementById('s_d').value;
                const e_d = document.getElementById('e_d').value;

                if(title == '' || category == '' || s_d == '' || e_d == '' )
                {
                    alert('Null Submission');
                }
</script>

</form>
<p align="center"> Copyright © 2021 by Get Your Fund </p>

</body>
</html>
