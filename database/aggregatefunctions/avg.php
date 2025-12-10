<?php 
// demo question :find the average salary of an employee 
require "../db.php";
$avgsql="SELECT AVG(salary) as AverageSalary FROM employee";
$response=mysqli_query($connection, $avgsql);
$responseData=$response->fetch_assoc();
$averageSalary=$responseData['AverageSalary'];
echo $averageSalary;
mysqli_close($connection);
?>