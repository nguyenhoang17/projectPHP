<?php require_once('Views/Partials/header.php');?>

<div class="container">
<h3 align="center">DOGS BLOG - QUẢN LÝ BÀI VIẾT</h3>
<h3 align="center">THÊM BÀI VIẾT</h3>
<hr>
    <form action="index.php?mod=post&act=store" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <input type="hidden" class="form-control" id="" placeholder="" name="like_post" value="0">
            <label for="">Chủ đề</label>
            <input type="text" class="form-control" id="" placeholder="" name="title" value="">
        </div>
        <div class="form-group">
            <label for="">Mô tả</label>
            <input type="text" class="form-control" id="" placeholder="" name="description" value="">
        </div>
        <div class="form-group">
            <label for="">Ảnh</label>
              <input type="file" class="form-control" id="" placeholder="" name="thumbnail" value="">
        </div>
        <div class="form-group">
            <label for="">Danh mục</label>
            <select id="cars" name="category_id"  class="form-control">
                <option value="0">Chọn danh mục</option>
              <?php foreach ($categories as $value) {?>
              <option value="<?=$value['id']?>"><?=$value['name']?></option>
            <?php  } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Nội dung</label>
              <input type="text" class="form-control" id="" placeholder="" name="content" value="">
        </div>
        <div class="form-group">
            <label for="">Thời gian tạo</label>
          <input type="datetime-local" name="created_at" class="form-control" value=""
        </div>
      </br>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
</div>
<?php require_once('Views/Partials/footer.php');?>
