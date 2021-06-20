<?php 
$con=mysqli_connect('localhost','root','','sakila');
$rs=mysqli_query($con,"Select customer.customer.id, store.id, first_name,last_name , address ,address_id from customer left join address on address.address_id=customer.customer_id left join payment on customer.customer_id=payment.payment_id 
where customer.customer_id=$_GET(id)");

?>
<table border="1" align="center" width="600px">
    <tr>
        <th>Customer_id</th>
        <th>Store_id</th>
        <th>Name</th>
        <th>Address_id</th>
        <th>Action</th>
    </tr>
    <?php 
        while($info = mysqli_fetch_assoc($rs)){
        ?>
        <tr align="center">
            <td><?= $info ['customer_id'];?></a></td>
            <td><a href="store.php?id=<?=$info['store_id'];?>"><?= $info ['store_id'];?></a></td>
            <td><?=$info['first_name'].' '.$info['last_name'];?></td>
            <td><a href="address.php?id=<?=$info['address_id'];?>"><?= $info ['customer_id'];?></a></td>
            </tr>
        <?php
    }
    ?>
</table>