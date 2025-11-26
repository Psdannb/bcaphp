<?php
require "db.php";
$firstname= "Kiran";
$lastname="Rajbanshi";

// one of the approach to insert the data 
// $insertsql= "INSERT INTO TABLE_NAME (ATTRIBUTES NAMES) VALUES (ACTUAL VALUES)=>syntax
// $insertsql= "INSERT INTO userdata(firstname,lastname) VALUES ('$firstname','$lastname')";
// mysqli_query(conectionString, sql Query)=>syntax
//  $response= mysqli_query( $connection,$insertsql);
//  mysqli_close($connection);

// another secure approach to insert the data 
$insertsql="INSERT INTO userdata(firstname,lastname) VALUES (?,?)";
$stmt=$connection->prepare($insertsql);
$stmt->bind_param("ss",$firstname,$lastname);
$response=$stmt->Execute();
 if($response){
    echo "Data inserted sucessfully";
 }
 else{
    echo "ERror is uploading the data";
 }
$stmt->close();
 $connection->close();
?>