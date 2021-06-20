
<?php 
$con= mysqli_connect('localhost','root','','sakila');
$rs=mysqli_query($rs,"select title,release_year,	language.name as 'film language', rating ,first_name,
category.name as 'Category Name'
from actor left join film_actor on film_actor.actor_id=actor.actor_id 
left join film on film_actor.film_id=film.film_id left join language on  language.language_id=film.language_id  
left join film_category on film.film_id = film_category.film_id left join category on category.category_id=film_category.category_id
where actor.actor_id=$_GET[id]");
?>
<table align="center" width="600px" height="35%" border="1px">
    <thead>
        <tr>
            <th colspan=6>Table</th>
        </tr>
        <tr>
            <th>title</th>
            <th>release year</th>
            <th>Address</th>
            <th>Category_name</th>
            <th>rating</th>
            <th>Actor name</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $index=0;
            while($info = mysqli_fetch_assoc($rs)){
        ?>
        <tr>
            <td><?= $info ['title'];?></a></td>
            <td><?= $info ['release_year'];?></td>
            <td><a href="address.php?id=<?=$info['address_id'];?>"></td>
            <td><a href="category.php?id=<?=$info['category_id'];?>"></a></td>
            <td><?= $info ['rating'];?></td>
            <td><?= $info ['first_name'];?></td>
            </tr>
        <?php
            
         } ?>
    </tbody>
</table>