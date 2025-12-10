<?php 
// demo question :find the minimum salary of an employee 
require "../db.php";
$sql="SELECT min(salary) as lowestSalary FROM employee";
$response=mysqli_query($connection, $sql);
$responseData=$response->fetch_assoc();
$lowestSalary=$responseData['lowestSalary'];
echo $lowestSalary;
mysqli_close($connection);
?>