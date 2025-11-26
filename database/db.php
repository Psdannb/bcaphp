<?php
$host="localhost";
$dbname="bca2080";
$username="root";
$password="";
 $connection=mysqli_connect($host, $username, $password, $dbname);
 if(!$connection){
    echo "Error while connecting to the database";
    die();
 }

?>