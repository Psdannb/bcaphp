<?php
require "db.php";
// $deletesql="DELETE FROM TABLE_NAME WHERE UNIQUEiDENTIFICATION ='VALUE'";
$deletesql="DELETE FROM userdata WHERE id ='3'";
$response=mysqli_query( $connection,$deletesql);
if($response){
    echo "Data Deleted sucessfully";
}
else{
    echo "error in deleting the data";
}
mysqli_close($connection);
?>