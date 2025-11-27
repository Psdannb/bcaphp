<?php
require "db.php";

// $updateSql = "UPDATE userdata SET column=value column=value WHERE uniqueID=vaue";
$newFirstName = "guru";
$updateSql = "UPDATE userdata SET firstname='$newFirstName' WHERE id='2'";
$response = mysqli_query($conn, $updateSql);
if($response) {
    echo "Updated Successfully";
} else {
    echo "Update Failed";
}