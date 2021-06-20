<?php
$con=mysqli_connect('localhost','root','','sakila');
$rs=mysqli_query($con,"Select * from address order by address_id");
?>

<table align="center" width="600px" height="35%" border="1px">
    <thead>
        <tr>
            <th colspan=6>Table</th>
        </tr>
        <tr>
            <th>Address_id</th>
            <th>Address</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($info = mysqli_fetch_assoc($rs)){
        ?>
        <tr>
            <td><?= $info ['address_id'];?></a></td>
            <td><?= $info ['address'];?></td>
            <td><?= $info ['Phone'];?></td>
         </tr>
        <?php
            
         } ?>
    </tbody>
</table>