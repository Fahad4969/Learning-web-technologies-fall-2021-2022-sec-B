<?php

$link = mysqli_connect("localhost", "root", "", "webtech");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$company = mysqli_real_escape_string($link, $_REQUEST['company']);
$ceo = mysqli_real_escape_string($link, $_REQUEST['ceo']);
$j_d = mysqli_real_escape_string($link, $_REQUEST['j_d']);
$loc = mysqli_real_escape_string($link, $_REQUEST['loc']);


 
// Attempt insert query execution
$sql = "INSERT INTO founders (Company_Name, CEO, Joined_Date, Location ) VALUES ('$company', '$ceo','$j_d','$loc')";
if(mysqli_query($link, $sql)){
    header("location:../view/founder.php"); 

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>