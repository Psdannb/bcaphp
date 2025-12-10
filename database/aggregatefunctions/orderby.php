<?php
// ORDER BY is used to arrange the data in ascending or desending order on the basis of values of a database field
require "../db.php";
// $sql="SELECT *  FROM employee ORDER BY id DESC";
$sql="SELECT *  FROM employee ORDER BY id ASC";
$response=mysqli_query($connection, $sql);
// print_r($response);
?>
<table border="1">
    <tr>
        <th>id</th>
        <th>fullname</th>
        <th>Department</th>
        <th>Salary</th>
    </tr>

    <?php
foreach($response as $data){
    // print_r($data);
    ?>
    <tr>
        <td><?php echo $data['id']?></td>
        <td><?php echo $data['fullname']?></td>
        <td><?php echo $data['department']?></td>
        <td><?php echo $data['salary']?></td>
    </tr>
    <?php
}
?>
</table>
<?php
mysqli_close($connection);
?>