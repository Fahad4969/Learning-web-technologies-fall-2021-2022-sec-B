<?php

include "db.php"; 

$id = $_GET['id']; 

$del = mysqli_query($conn,"delete from transaction where ID = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:../view/transaction.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>