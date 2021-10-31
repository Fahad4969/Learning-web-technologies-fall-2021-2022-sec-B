<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Profile picture</title>
</head>
<body>
   <div>
	<form action="" method="post">
		<fieldset>
			<legend>Change Profile picture</legend>
			<table>
               <tr>
                   <td>Upload Profile picture</td>
               </tr>
               <tr>
                   <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
               </tr>
				<tr>
					<td><input type="submit" name="submit" value="Upload"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
    <div class="dashboard">
        <a href="Home.html">Home</a> <br>
        <a href="viewProfile.php">View Profile</a> <br>
        <a href="EditProfile.php">Edit Profile</a><br>
        <a href="profilePicture.php">Change Profile picture</a><br>
        <a href="ChangePassword.php">Change Password</a><br>
        <a href="logout.php">logout</a> <br>
    </div>
</body>
</html>
<?php
	
	}else{
		header('location: login.html');
	}
?>