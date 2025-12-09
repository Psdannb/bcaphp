<?php
require "db.php";
$selectsql= "SELECT * FROM userdata";
 $response= mysqli_query( $connection,$selectsql);
//  $singlerow=$response->fetch_assoc();
//  print_r($singlerow);
?>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
        </tr>
    </thead>
    <?php
 foreach($response as $userdata){
    ?>
    <tr>
        <td><?php echo $userdata['id'];?></td>
        <td><?php echo $userdata['firstname'];?></td>
        <td><?php echo $userdata['lastname']; ?></td>
    </tr>
    <?php
 }
?>
</table>