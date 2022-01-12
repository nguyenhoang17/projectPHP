<?php
  require_once('Views/Partials/header.php');
?>
<div class="card mb-4">
  <div class="card-body">
    <a href="index.php?mod=auth&act=register" class="btn btn-primary float-right mb-3">Create User</a>
        <table class="dataTable-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>PassWord</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php  foreach ($users as $key => $user) { ?>
              <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['password'] ?></td>
                <td>
                  <a href="index.php?mod=user&act=handleEdit&id=<?= $user['id'] ?>" class="btn btn-warning">Edit</a>
                  <a href="index.php?mod=user&act=deleteUser&id=<?= $user['id'] ?>" class="btn btn-danger">Delete</a>
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
