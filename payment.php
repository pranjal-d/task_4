<?php
$con=mysqli_connect('localhost','root','','sakila');
$rs=mysqli_query($con,"Select * from payment order by payment_id");
?>

<table align="center" width="600px" height="35%" border="1px">
    <thead>
        <tr>
            <th colspan=6>Table</th>
        </tr>
        <tr>
            <th>Payment_id</th>
            <th>Customer_id</th>
            <th>Staff_id</th>
            <th>Rental_id</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($info = mysqli_fetch_assoc($rs)){
        ?>
        <tr>
            <td><?= $info ['payment_id'];?></a></td>
            <td><?= $info ['customer_id'];?></td>
            <td><?= $info ['staff_id'];?></td>
            <td><?= $info ['rental_id'];?></td>
            <td><?= $info ['amount'];?></td>
            <td><a href="customer.php?id=<?=$info['payment_id'];?>">action</a></td>
            </tr>
        <?php
            
         } ?>
    </tbody>
</table>