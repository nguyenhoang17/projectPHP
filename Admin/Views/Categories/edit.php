<?php
  require_once('Views/Partials/header.php');



?>
    <div class="container">
    <h3 align="center">DOGS BLOG - QUẢN LÝ DANH MỤC</h3>
    <h3 align="center">CẬP NHẬT DANH MỤC</h3>
    <hr>
        <form action="index.php?mod=category&act=updateCategory" method="POST" role="form" enctype="multipart/form-data">


            <div class="form-group">
              <input type="hidden" name="id" value="<?=$categories['id']?>">
                <label for="">Tên danh mục</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $categories['name']?>">
            </div>
            <div class="form-group">
                <label for="">Mô tả</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?=$categories['description']?>">
            </div>
            <div class="form-group">
                <label for="">Ảnh</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail" value="<?= $categories['thumbnail']?>">
            </div>
            <div class="form-group">
                <label for="">Danh mục cha</label>
                <select id="cars" name="parent_id"  class="form-control">
                    <option value="0">Danh mục cha</option>
                  <?php foreach ($category_id as $value) {?>
                  <option value="<?=$value['id']?>"><?=$value['name']?></option>
                <?php  } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Thời gian tạo</label>
                <input type="datetime-local" class="form-control" id="" placeholder="" name="created_at"  value="">
            </div>



            <button style="margin-top: 30px;" type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <?php
      require_once('Views/Partials/footer.php');
    ?>
