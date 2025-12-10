<?php 
// demo question :find the total salary of an employee 
require "../db.php";
$sql="SELECT Sum(salary) as totalSalary FROM employee";
$response=mysqli_query($connection, $sql);
$responseData=$response->fetch_assoc();
$totalSalary=$responseData['totalSalary'];
echo $totalSalary;
mysqli_close($connection);
?>