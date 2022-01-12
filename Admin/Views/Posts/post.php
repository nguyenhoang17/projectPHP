
<?php
  require_once('Views/Partials/header.php');
?>
<div class="card mb-4">
  <div class="card-body">
    <a href="index.php?mod=post&act=create" class="btn btn-primary float-right mb-3">Create Post</a>
        <table class="dataTable-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th style="display:none;">Description</th>
              <th>Thumbnail</th>
              <th>Category_id</th>
              <th style="display:none;">Content</th>
              <th>Created_at</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($posts as $key => $post) { ?>
              <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $post['title'] ?></td>
                <td style="display:none;">><?= $post['description'] ?></td>
                  <td><img src="images/<?= $post['thumbnail'] ?>" style="width: 30px; height: 30px; border-radius: 50%;"></td>
                    <td><?= $post['category_id'] ?></td>
                      <td style="display:none;"><?= $post['content'] ?></td>
                    <td><?= $post['created_at'] ?></td>
                <td>
                  <a href="index.php?mod=post&act=handleEdit&id=<?= $post['id'] ?>" class="btn btn-warning" class="btn btn-warning">Edit</a>
                  <a href="index.php?mod=post&act=deleteList&id=<?= $post['id'] ?>" class="btn btn-danger" class="btn btn-danger">Delete</a>
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
