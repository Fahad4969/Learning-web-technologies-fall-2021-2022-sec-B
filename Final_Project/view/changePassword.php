<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Password Change
        </title>
    
    </head>
    <body style="background: url(../asset/cp.jpg); ">
	<?php
	include('header.php');
?>
    
    <form  method="POST" action="../controller/passchange.php" onsubmit="return Validation()">
					<table  width="100%" style="background-color: #FFFFFF7F; rowspan=3" >
		                                 <tr><td></td></tr>
                                            <tr><td align="center">
                                                Name: <br><br>
                                                <input type="text" name="name" id="name"><br><br>
                                                Current Password: <br><br>
                                                <input type="password" name="password" id="password"> <br><br>
                                                New Password: <br><br>
                                                <input type="password" name="newpass" id="newpass"> <br><br>
                                                Confirm New Password: <br><br>
                                                <input type="password" name="renewpass" id="renewpass"><br><br>
                                                <input type="submit" name="submit" value="Submit" onclick="Validation()">
                                            </td></tr>
											<tr><td></td></tr>

                                        </table>

	
	
        <script>
            function Validation()
            {
                const name = document.getElementById('name').value;
                const password = document.getElementById('password').value;
                const newpass = document.getElementById('newpass').value;
                const renewpass = document.getElementById('renewpass').value;
            
                let errorflag=false;
                let i=0;

                if(name == ''|| password== '' || newpass == '' || renewpass== '')
                {
                    alert('Null Submission');
                    errorflag=true;
                }
                else
                {
                
                    let passflag=false;

                    if((password.length) < 4)
                    {
                        alert ('Password must contain atleast 4 characters');
                        errorflag=true;
                    }
            
                    if((newpass.length) < 4)
                    {
                        alert ('New Password must contain atleast 4 characters');
                        errorflag=true;
                    }
                    let renewpassflag=false;

            

                    if((renewpass.length) < 4)
                    {
                        alert ('Confirmed Password must contain atleast 4 characters');
                        errorflag=true;
                    }

                    if(newpass != renewpass )
                    {
                        alert ("Password can not be confirmed");
                        errorflag=true;
                    }      
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
    </body>
</html>