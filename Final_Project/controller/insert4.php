<?php

$link = mysqli_connect("localhost", "root", "", "webtech");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$date = mysqli_real_escape_string($link, $_REQUEST['Date']);
$name = mysqli_real_escape_string($link, $_REQUEST['AcName']);
$type = mysqli_real_escape_string($link, $_REQUEST['Type']);
$amount = mysqli_real_escape_string($link, $_REQUEST['Amount']);
$status = mysqli_real_escape_string($link, $_REQUEST['Status']);


 
// Attempt insert query execution
$sql = "INSERT INTO `transaction` (Date, AcName, Type, Amount, Status ) VALUES ('$date', '$name', '$type','$amount','$status)";
if(mysqli_query($link, $sql)){
    header("location:../view/founder.php"); 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>