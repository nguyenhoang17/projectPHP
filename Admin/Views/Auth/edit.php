<?php
  require_once('Views/Partials/header.php');



?>
    <div class="container">
    <h3 align="center">DOGS BLOG - QUẢN LÝ NGƯỜI DÙNG</h3>
    <h3 align="center">CẬP NHẬT THÔNG TIN</h3>
    <hr>
        <form action="index.php?mod=User&act=userUpdate" method="POST" role="form" enctype="multipart/form-data">


            <div class="form-group">
              <input type="hidden" name="id" value="<?=$users['id']?>">
                <label for="">Tên</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $users['name']?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email" value="<?=$users['email']?>">
            </div>
            <div class="form-group">
                <label for="">Mật Khẩu</label>
                <input type="password" class="form-control" id="" placeholder="" name="password" value="<?= $users['password']?>">
            </div>
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
        </form>
    </div>
    <?php
      require_once('Views/Partials/footer.php');
    ?>
