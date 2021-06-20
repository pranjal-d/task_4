<?php
$con=mysqli_connect('localhost','root','','sakila');
$rs=mysqli_query($con,"Select * from category order by category_id");
?>

<table align="center" width="600px" height="35%" border="1px">
    <thead>
        <tr>
            <th colspan=6>Table</th>
        </tr>
        <tr>
            <th>category_id</th>
            <th>name</th>
            <!-- <th>Address_id</th> -->
        </tr>
    </thead>
    <tbody>
        <?php
            while($info = mysqli_fetch_assoc($rs)){
        ?>
        <tr>
            <td><?= $info ['category_id'];?></a></td>
            <td><?= $info ['name'];?></td>
            </tr>
        <?php
            
         } ?>
    </tbody>
</table>