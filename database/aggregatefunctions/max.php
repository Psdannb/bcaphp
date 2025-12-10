<?php 
// demo question :find the highest salary of an employee 
require "../db.php";
$sql="SELECT max(salary) as highestSalary FROM employee";
$response=mysqli_query($connection, $sql);
$responseData=$response->fetch_assoc();
$highestSalary=$responseData['highestSalary'];
echo $highestSalary;
mysqli_close($connection);
?>