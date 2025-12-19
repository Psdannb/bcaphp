<?php
require "../database/db.php";
// print_r($_POST);
$fname= $_POST['fname'];
$Lname= $_POST['lname'];



$sql ="INSERT INTO userdata(firstname,lastname)values (?,?)";
$stmt= $connection->prepare($sql);
$stmt->bind_param("ss",$fname,$Lname);
if($stmt->Execute()){
    echo "Data has been inserted into the database";
}
else{
    echo "Error while inserting data on the database";
}
$stmt->close();
$connection->close();
?>