<?php
require "db.php";
// $selectsql= "SELECT * FROM userdata WHERE id='1'";
//  $response= mysqli_query( $connection,$selectsql);

//  print_r($response);
// foreach($response as $userdata){
    // print_r($userdata);
    ?>
<!--<p>Hello i am <?php //echo $userdata['firstname'];?> <?php //echo $userdata['lastname']; ?> </p> -->
<?php
// }

$readfname="SELECT firstname FROM userdata WHERE id='1'";
$response= mysqli_query( $connection,$readfname);
print_r($response->fetch_assoc());

?>