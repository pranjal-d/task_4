<?php
$con=mysqli_connect('localhost','root','','sakila');
$rs=mysqli_query($con,"Select staff.staff.id, store.id, first_name,last_name ,address_id from staff left join store on store.store_id left join on address.address_id  
where staff.staff_id=$_GET(id)");
?>

<table align="center" width="600px" height="35%" border="1px">
    <thead>
        <tr>
            <th colspan=6>Table</th>
        </tr>
        <tr>
            <th>Staff_id</th>
            <th>First_name</th>
            <th>Last_name</th>
            <th>Address_id</th>
            <th>Store_id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $index=0;
            while($info = mysqli_fetch_assoc($rs)){
        ?>
        <tr>
            <td><?= $info ['staff_id'];?></a></td>
            <td><?= $info ['first_name'];?></td>
            <td><?= $info ['last_name'];?></td>
            <td><?= $info ['address_id'];?></td>
            <td><?= $info ['store_id'];?></td>
            <td><a href="store.php?id=<?=$info['staff_id'];?>">action</a></td>
            </tr>
        <?php
            
         } ?>
    </tbody>
</table>