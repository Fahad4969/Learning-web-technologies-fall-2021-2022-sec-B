
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body style="background: url(../asset/back1.jpg); ">
	<form method="POST" action="../controller/loginCheck.php" onsubmit="return Validation()" >
		<table width="100%" height="700px" >
			<tr>
				<td>
					<table align="center" style="background-color: #FFFFFF7F;" >
						<tr>
							<td>
								<fieldset>
									<table>
										<tr>
											<td colspan="2">
												<h2 align="center" Login as Fund Manager</h2>
											</td>
										</tr>
										<tr>
											<td colspan="2" align="center">
												<img src="../asset/logo1.jpg" width="350px">
											</td>
										</tr>
										<tr>
											<td>
											<h3> Username </h3>
											</td>
											<td >
												<input type="text" name="username" id="name">
											</td>
										</tr>
										<tr align="center">
											<td colspan="2">
												<br>
											</td>
										</tr>
										<tr > 
											<td>
											<h3> Password</h3>
											</td>
											<td>
												<input type="password" name="password" id="password">
											</td>
										</tr>
										<tr align="center">
											<td colspan="2">
												<br>
												<hr>
											</td>
										</tr>
										<tr align="center">
											<td colspan="2">
											<button type="button" onclick="window.location.href='signup.php';">Signup</button>

												<input type="submit" name="submit" value="Login">

											</td>
										</tr>
	
									</table>
								</fieldset>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<h2 align="center"> Copyright © 2021 by Get Your Fund </h2>

	</form>
	<script>
		function Validation()
		{
			let errorflag =false;
	
			const name = document.getElementById('name').value;
            const password = document.getElementById('password').value;
			if(name == "" || password == "")
			{
				alert('Null Submission');
				errorflag=true;
			}
			if(errorflag==false)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	</script>
	<script>
$("button#submit").click( function() {
 
 if( $("#username").val() == "" || $("#password").val() == "" )
   $("div#ack").html("Please enter both username and password");
 else
   $.post( $("#myForm").attr("action"),
	   $("#myForm :input").serializeArray(),
function(data) {
$("div#ack").html(data);
});

$("#myForm").submit( function() {
  return false;
});

});
	</script>

</body>
</html>