<?php
//Returns only the matching rows from both tables
// here i have used two tables customers with fields(cid,fullname,city)
// and orders with fields (oid,product,orderdate)
require "../db.php";
$sql="SELECT * FROM customers INNER JOIN orders ON customers.cid=orders.cid";
$response= mysqli_query($connection, $sql);
// print_r($response);
?>
<table border="1">
    <tr>
        <th>customer id</th>
        <th>full name</th>
        <th>city</th>
        <th>order id</th>
        <th> order product</th>
        <th>order date</th>
    </tr>

    <?php
foreach($response as $data){
    // print_r($data);
    ?>
    <tr>
        <td><?php echo $data['cid'] ?></td>
        <td><?php echo $data['fullname'] ?></td>
        <td><?php echo $data['city'] ?></td>
        <td><?php echo $data['oid'] ?></td>
        <td><?php echo $data['product'] ?></td>
        <td><?php echo $data['orderdate'] ?></td>
    </tr>
    <?php
}
?>
</table>
<?php
mysqli_close($connection);
?>