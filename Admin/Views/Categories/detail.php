<?php require_once('Views/Partials/header.php');?>
  <p>Avatar : <img src="images/<?=$categories['thumbnail'] ?>" style="width: 30px; height: 30px; border-radius: 50%;"></p>
  <p>Name: <?=$categories['name']?></p>
  <p>Description: <?=$categories['description']?></p>
  <p>Parent_id: <?=$categories['parent_id']?></p>
  <p>Created_at: <?=$categories['created_at']?></p>


<?php require_once('Views/Partials/footer.php');?>
