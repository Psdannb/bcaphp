<?php
require "db.php";
// "CREATE table tablename(
// column-name data-type constaraints,
// .....
// )";
$createtablesql="CREATE table check_table(
id INT  PRIMARY KEY,
data VARCHAR(50) 
)";
mysqli_query($conn,$createtablesql);
mysqli_close($conn);

?>