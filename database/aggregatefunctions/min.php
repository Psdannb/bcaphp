<?php 
// demo question :find the minimum salary of an employee 
require "../db.php";
$avgsql="SELECT min(salary) as lowestSalary FROM employee";
$response=mysqli_query($connection, $avgsql);
$responseData=$response->fetch_assoc();
$lowestSalary=$responseData['lowestSalary'];
echo $lowestSalary;
mysqli_close($connection);
?>