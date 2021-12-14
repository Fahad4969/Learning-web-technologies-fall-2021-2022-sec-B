<?php
session_start();
	$errorflag=false;

	if(isset($_POST['submit']))
	{
        $name = $_POST['name'];
        $clientaccountno = $_POST['accountno'];
		$withdrawammount = $_POST['withdrawammount'];
        $password = $_POST['password'];

        if($name == '' || accountno == '' || $withdrawammount == '' || $password == '' )
        {
            echo "Null Submission<br>";
			$errorflag=true;
        }
		else
		{

			$clientaccflag=false;
	
			for($i=0;$i<strlen($clientaccountno);$i++)
			{
				if(($clientaccountno[$i] >= 0 ) && ($clientaccountno[$i] <= 9 ))
				{
						$clientaccflag=true;				         
				}
			}
			if($clientaccflag == false)
			{
				echo 'Invalid Account Number Format<br>';
				$errorflag=true;
			}

            $withdrawammountflag=false;
	
			for($i=0;$i<strlen($withdrawammount);$i++)
			{
				if(($withdrawammount[$i] >= 0 ) && ($withdrawammount[$i] <= 9 ))
				{
                    $withdrawammountflag=true;				         
				}
			}
			if($withdrawammountflag == false)
			{
				echo 'Invalid Ammount Format<br>';
				$errorflag=true;
			}
			if($name!= ($_SESSION['name']))
			{
				echo 'Name does not match <br>';
				$errorflag=true;
			}
			if($password != ($_SESSION['password']))
			{
				echo 'Password does not match <br>';
				$errorflag=true;
			}
			if($clientaccountno != ($_SESSION['id']))
			{
				echo 'Account no does not match <br>';
				$errorflag=true;
			}


        }



       
       
    }
    ?>