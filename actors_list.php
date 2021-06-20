<?php 
$con=mysqli_connect('localhost','root','','sakila');
$rs=mysqli_query($con,"Select * from actor order by actor_id");
?>
<table border="1" align="center" width="600px">
    <tr>
        <th>Actor_id</th>
        <th>First_name</th>
        <th>Last_name</th>
        <th>Action</th>
    </tr> 
        <?php
        $index=0;
        while($info = mysqli_fetch_assoc($rs)){
    ?>
    <tr>
        <td><?= $info ['actor_id'];?></a></td>
        <td><?= $info ['first_name'];?></td>
        <td><?= $info ['last_name'];?></td>
        <td><a href="list.php?id=<?=$info['actor_id'];?>">action</a></td>
        </tr>
    <?php
        
     } ?>
</table>