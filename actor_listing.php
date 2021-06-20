
<?php 
$con=new mysqli('localhost','root','','sakila');
$data=$con->query("select title,release_year,	language.name as 'film language', rating ,first_name,
category.name as 'Category Name'
from actor left join film_actor on film_actor.actor_id=actor.actor_id 
left join film on film_actor.film_id=film.film_id left join language on  language.language_id=film.language_id  
left join film_category on film.film_id = film_category.film_id left join category on category.category_id=film_category.category_id
where actor.actor_id=$_GET[id]")->fetch_all(MYSQLI_ASSOC);
if(isset($data[0])){
    $colmsname=array_keys($data[0]);
}
?>
<table border="1">
    <tr>
        <th>S.no</th>
        <?php foreach($colmsname as $clname){ ?>
        <th><?=$clname;?></th>
        <?php } ?>
    </tr>
    <?php 
        $Sno=1;
        foreach($data as $info){
        ?>
        <tr>
        <td><?=$Sno++;?></td>
         <?php foreach($info as $col){   ?>
        <td> <?=$col;?></td>
        <?php } ?>
        </tr>
        <?php
    }
    ?>
</table>
<h3>Total films : <?=count($data);?></h3>