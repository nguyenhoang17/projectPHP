<?php
  require_once('Views/Partials/header.php');



?>
    <div class="container">
    <h3 align="center">ZENT - Education And Technology Group</h3>
    <h3 align="center">Update User</h3>
    <hr>
        <form action="index.php?mod=User&act=userUpdate" method="POST" role="form" enctype="multipart/form-data">


            <div class="form-group">
              <input type="hidden" name="id" value="<?=$users['id']?>">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $users['name']?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email" value="<?=$users['email']?>">
            </div>
            <div class="form-group">
                <label for="">PassWord</label>
                <input type="password" class="form-control" id="" placeholder="" name="password" value="<?= $users['password']?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <?php
      require_once('Views/Partials/footer.php');
    ?>
