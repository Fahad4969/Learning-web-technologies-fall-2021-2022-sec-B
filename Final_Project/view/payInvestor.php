<?php
	
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Investors Payment</title>
</head>
<body style="background-color:Silver;">

<html>
<body style="background-color:Silver;">

<?php
	
	include('header.php');
?>
								<table  width="100%" style="background-color: #FFFFFF7F;">
									<tr>
									<form method="POST" action="../controller/withdrawvalidation.php" onsubmit="return Validation()">

										<td>
											<fieldset align="center">
											<legend>Payment</legend><br><br>
											User Name: <br><br>
                                                <input type="text" name="name" id="name" ><br><br>
                                                Account No: <br><br>
                                                <input type="text" name="accountno" id="accountno"><br><br>
                                                Amount: <br><br>
                                                <input type="text" name="withdrawammount" id="withdrawammount"><br><br>
                                                Password: <br><br>
                                                <input type="password" name="password" id="password"> <br><br>					
                                
                                           
											<hr>
											<input type="submit" name="submit" value="Submit">
										</fieldset>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			</form>

	
		</table>
        <script>
		
		function Validation()
            {
                const name = document.getElementById('name').value;
                const clientaccountno = document.getElementById('accountno').value;
                const withdrawammount = document.getElementById('withdrawammount').value;
                const password = document.getElementById('password').value;

                let errorflag=false;
                let i=0;

                if(name == '' || accountno == '' || withdrawammount == '' || password == '' )
                {
                    alert('Null Submission');
                    errorflag=true;
                }
                else
                {
                    let clientaccflag=false;
                    for(i=0; i<=accountno.length; i++)
                    {
                        if(clientaccountno[i]  >= 0  && accountno[i]  <= 9 )
                        {
                                clientaccflag=true;			         
                        }
                    }
                    if(clientaccflag == false)
                    {
                        alert ('Invalid Account Number Format');
                        errorflag=true;
                    }
                    withdrawammountflag=false;
            
                    for(i=0;i<withdrawammount.length;i++)
                    {
                        if((withdrawammount[i] >= 0 ) && (withdrawammount[i] <= 9 ))
                        {
                            withdrawammountflag=true;				         
                        }
                    }
                    if(withdrawammountflag == false)
                    {
                        alert ('Invalid Ammount Format');
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
		<p align="center"> Copyright © 2021 by Get Your Fund </p>

</body>
</html>
