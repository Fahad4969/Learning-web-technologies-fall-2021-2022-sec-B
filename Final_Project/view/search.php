<?php


include "../controller/db.php";

if (isset($_POST['search'])) {

   $Name = $_POST['search'];
   $conn = mysqli_connect("localhost","root","","webtech");


   $Query = "SELECT name FROM users WHERE name LIKE '%$Name%' LIMIT 5";


   $ExecQuery = MySQLi_query($conn, $Query);


   echo '

<ul>

   ';

   while ($Result = MySQLi_fetch_array($ExecQuery)) {

       ?>



   <li onclick='fill("<?php echo $Result['Name'] ?>")'>

   <a>


       <?php echo $Result['name']; ?>

   </li></a>


   <?php

}}


?>

</ul>