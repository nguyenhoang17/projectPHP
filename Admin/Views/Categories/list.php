
<?php
  require_once('Views/Partials/header.php');
?>
<div class="card mb-4">
  <div class="card-body">
    <a href="index.php?mod=category&act=create" class="btn btn-primary float-right mb-3">Create category</a>
        <table class="dataTable-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Avata</th>
              <th>Name</th>
              <th style="display:none;">Description</th>
              <th>Parent_id</th>
              <th>Created_at</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php  foreach ($categories as $key => $category) { ?>
              <tr>
                <td><?= $key + 1 ?></td>
                <td><img src="images/<?=$category['thumbnail'] ?>" style="width: 30px; height: 30px; border-radius: 50%;"></td>
                <td><?= $category['name'] ?></td>
                <td style="display:none;"><?= $category['description'] ?></td>
                <td><?= $category['parent_id'] ?></td>
                <td><?= $category['created_at'] ?></td>
                <td>
                  <!-- <a href="index.php?mod=category&act=detail&id=<?= $category['id'] ?>" class="btn btn-info" class="btn btn-warning">Detail</a> -->
                  <a href="index.php?mod=category&act=handleEdit&id=<?= $category['id'] ?>" class="btn btn-warning" class="btn btn-warning">Edit</a>
                  <a href="index.php?mod=category&act=deleteList&id=<?= $category['id'] ?>" class="btn btn-danger" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
  </div>
</div>
<?php
  require_once("Views/Partials/footer.php");
?>
