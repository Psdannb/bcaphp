<?php
// The GROUP BY clause in SQL is used to group rows that have the same values in one or more columns into summary rows.
//  It is mainly used with aggregate functions like SUM(), COUNT(), AVG(), MIN(), and MAX() to perform calculations on each group.
// Think of it as organizing data into categories before performing calculations.
require "../db.php";
$sql="SELECT department,SUM(Salary) as totalsalary FROM employee Group BY department";
$response=mysqli_query($connection, $sql);
// print_r($response);
?>
<table border="1">
    <tr>
        <th>Department</th>
        <th>Total Salary</th>
    </tr>

    <?php
foreach($response as $data){
    // print_r($data);
    ?>
    <tr>
        <td><?php echo $data['department']?></td>
        <td><?php echo $data['totalsalary']?></td>
    </tr>
    <?php
}
?>
</table>
<?php
mysqli_close($connection);
?>