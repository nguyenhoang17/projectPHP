<?php
  require_once('Views/Partials/header.php');
?>
<div class="card mb-4">
  <div class="container">
  <h3 align="center">DOGS BLOG - QUẢN LÝ TÀI KHOẢN</h3>
  <h3 align="center">DANH SÁCH TÀI KHOẢN</h3>
  <hr>
  <div class="card-body">
    <a href="index.php?mod=auth&act=register" class="btn btn-primary float-right mb-3">Thêm Mới</a>
        <table class="dataTable-table">
          <thead>
            <tr>
              <th>STT</th>
              <th>Tên</th>
              <th>Email</th>
              <th>Mật Khẩu</th>
              <th>Hành Động</th>
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
                  <a href="index.php?mod=user&act=handleEdit&id=<?= $user['id'] ?>" class="btn btn-warning">Sửa</a>
                  <a href="index.php?mod=user&act=deleteUser&id=<?= $user['id'] ?>" class="btn btn-danger">Xóa</a>
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
