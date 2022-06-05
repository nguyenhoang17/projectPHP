
<?php
require_once('Views/Partials/header.php');
?>
<div class="card mb-4">
  <div class="container">
    <div class="" style="text-align:center; margin:20px auto;">
      <form action="index.php?mod=post&act=handleSearch" method="POST" style="" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
          <input class="form-control" name="keysearch" type="text" placeholder="Nhập chủ đề" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
          <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
        </div>
      </form>
    </div>

    <h3 align="center">DOGS BLOG - QUẢN LÝ BÀI VIẾT</h3>
    <h3 align="center">DANH SÁCH BÀI VIẾT</h3>
    <hr>
    <div class="card-body">
      <a href="index.php?mod=post&act=create" class="btn btn-primary float-right mb-3">Thêm</a>
      <table class="dataTable-table">
        <thead>
          <tr>
            <th>STT</th>
            <th style="width:20%;">Tiêu đề</th>
            <th style="display:none;">Mô tả</th>
            <th>Ảnh</th>
            <th>Danh mục</th>
            <th style="display:none;">Nội dung</th>
            <th>Lượt xem</th>
            <th>Lượt like</th>
            <th>Thời gian tạo</th>
            <th>Hành động</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($posts as $key => $post) { ?>
            <tr>
              <td><?= $key + 1 ?></td>
              <td><a target="_blank" href="../Website/index.php?mod=post&act=postDetail&id=<?=$post['id']?>"><?= $post['title'] ?></a></td>
              <td style="display:none;">><?= $post['description'] ?></td>
              <td><img src="images/<?= $post['thumbnail'] ?>" style="width: 30px; height: 30px; border-radius: 50%;"></td>
              <td><?php foreach ($categories as $key => $category) {
                if($post['category_id']==$category['id']){
                  echo $category['name'];
                }
              } ?></td>
              <td style="display:none;"><?= $post['content'] ?></td>
              <td><?= $post['view_post'] ?></td>
              <td><?= $post['like_post'] ?></td>
              <td><?= date_format(date_create($post['created_at']),"d/m/Y H:i:s") ?></td>
              <td>
                <a href="index.php?mod=post&act=handleEdit&id=<?= $post['id'] ?>" class="btn btn-warning" class="btn btn-warning">Sửa</a>
                <a href="index.php?mod=post&act=deleteList&id=<?= $post['id'] ?>" class="btn btn-danger" class="btn btn-danger">Xóa</a>
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
