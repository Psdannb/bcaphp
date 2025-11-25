<?php
$host="localhost";
$dbname="bca2080";
$username="root";
$password="";
 $conn=mysqli_connect($host, $username, $password, $dbname);
 if(!$conn){
    echo "Error while connecting to the database";
    die();
 }

?>