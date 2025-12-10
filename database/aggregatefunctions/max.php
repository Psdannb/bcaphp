<?php 
// demo question :find the highest salary of an employee 
require "../db.php";
$avgsql="SELECT max(salary) as highestSalary FROM employee";
$response=mysqli_query($connection, $avgsql);
$responseData=$response->fetch_assoc();
$highestSalary=$responseData['highestSalary'];
echo $highestSalary;
mysqli_close($connection);
?>