<?php 
 require "../db.php";
 $SQL = "SELECT * FROM employee WHERE salary >= 50000";
 $response = mysqli_query($connection, $SQL);
 ?>
<table border="1">
    <tr>
        <th>id</th>
        <th>fullname</th>
        <th>lastname</th>
        <th>salary</th>
    </tr>
    <?php
 foreach($response as $data)
 {
    ?>
    <tr>
        <td> <?php echo $data['id']; ?> </td>
        <td> <?php echo $data['fullname']; ?> </td>
        <td> <?php echo $data['department']; ?> </td>
        <td> <?php echo $data['salary']; ?> </td>
    </tr>
    <?php } ?>
</table>
<?php mysqli_close($connection) ?>