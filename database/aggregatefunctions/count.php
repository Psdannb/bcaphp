<?php 
// demo question :count the number of  employee 
require "../db.php";
$avgsql="SELECT COUNT(id) as totalemployees FROM employee";
$response=mysqli_query($connection, $avgsql);
$responseData=$response->fetch_assoc();
$totalemployees=$responseData['totalemployees'];
echo $totalemployees;
mysqli_close($connection);
?>