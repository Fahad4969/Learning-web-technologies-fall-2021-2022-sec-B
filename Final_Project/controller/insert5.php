<?php

$link = mysqli_connect("localhost", "root", "", "webtech");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$loc = mysqli_real_escape_string($link, $_REQUEST['loc']);
$inv = mysqli_real_escape_string($link, $_REQUEST['inv']);

if(($errorflag == false))
{ $sql = "INSERT INTO investors (name, location, investment) VALUES ('$name', '$loc', '$inv')";
if(mysqli_query($link, $sql)){
    header("location:../view/investors.php"); 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
mysqli_close($link);
?>