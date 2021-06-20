<?php 
$con=new mysqli('localhost','root','','sakila');
$data=$con->query('select * from actor ')->fetch_all(MYSQLI_ASSOC);
?>
<table border="1" align="center" width="600px">
    <tr>
        <th>Sno.</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    <?php 
        $Sno=1;
        foreach($data as $info){
        ?>
        <tr align="center">
        <td><?=$Sno++;?></td>
        <td><?=$info['first_name'].' '.$info['last_name'];?></td>
        <td><a href="actor_listing.php?id=<?=$info['actor_id']?>">Films</a></td>
        </tr>
        <?php
    }
    ?>
</table>