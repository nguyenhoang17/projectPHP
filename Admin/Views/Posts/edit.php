<?php require_once('Views/Partials/header.php');?>

<div class="container">
<h3 align="center">DOGS BLOG - QUẢN LÝ BÀI VIẾT</h3>
<h3 align="center">CẬP NHẬT BÀI VIẾT</h3>
<hr>
    <form action="index.php?mod=post&act=updatePost" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <input type="hidden" name="id" value="<?=$posts['id']?>">
            <label for="">Chủ đề</label>
            <input type="text" class="form-control" id="" placeholder="" name="title" value="<?=$posts['title']?>">
        </div>
        <div class="form-group">
            <label for="">Mô tả</label>
            <input type="text" class="form-control" id="" placeholder="" name="description" value="<?=$posts['description']?>">
        </div>
        <div class="form-group">
            <label for="">Ảnh</label>
              <input type="file" class="form-control" id="" placeholder="" name="thumbnail" value="<?=$posts['thumbnail']?>">
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
              <textarea type="text" class="form-control" id="descriptionPostEdit" placeholder="" name="content" value="" rows="8" cols="10"><?=$posts['content']?></textarea>
        </div>
        <div class="form-group">
            <label for="">Thời gian tạo</label>
            <input type="datetime-local" class="form-control" id="" placeholder="" name="created_at"  value="">
        </div>
        <button style="margin-top: 30px;" type="submit" class="btn btn-primary">Cập Nhật</button>
    </form>
</div>
<?php require_once('Views/Partials/footer.php');?>
