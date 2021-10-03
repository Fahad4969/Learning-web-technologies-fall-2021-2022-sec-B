<?php

	if(isset($_POST['submit']))
    {

		$email = $_POST['email'];

		if($email == "")
        {
			echo "Null submission...";
		}else{
			echo "Email: ",$email;
		}
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Email Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Email</legend>
			<input type="email" name="email" value=""> <br> <hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>