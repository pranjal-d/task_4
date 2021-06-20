<?php
$con=mysqli_connect('localhost','root','','sakila');
$rs=mysqli_query($con,"Select * from store order by store_id");
?>

<table align="center" width="600px" height="35%" border="1px">
    <thead>
        <tr>
            <th colspan=6>Table</th>
        </tr>
        <tr>
            <th>Store_id</th>
            <th>Manager_staff_id</th>
            <th>Address_id</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($info = mysqli_fetch_assoc($rs)){
        ?>
        <tr>
            <td><?= $info ['store_id'];?></a></td>
            <td><?= $info ['manager_staff_id'];?></td>
            <td><?= $info ['address_id'];?></td>
            </tr>
        <?php
            
         } ?>
    </tbody>
</table>