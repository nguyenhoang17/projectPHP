
<?php
  require_once('Views/Partials/header.php');
?>
<div class="card mb-4">
  <div class="container">
    <div class="" style="text-align:center; margin:20px auto;">
      <form action="index.php?mod=category&act=handleSearch" method="POST" style="" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
          <div class="input-group">
              <input class="form-control" name="keysearch" type="text" placeholder="Nhập chủ đề" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
              <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
          </div>
      </form>
    </div>
  <h3 align="center">DOGS BLOG - QUẢN LÝ DANH MỤC</h3>
  <h3 align="center">DANH SÁCH DANH MỤC</h3>
  <hr>
  <div class="card-body">
    <a href="index.php?mod=category&act=create" class="btn btn-primary float-right mb-3">Thêm</a>
        <table class="dataTable-table">
          <thead>
            <tr>
              <th>STT</th>
              <th>Ảnh</th>
              <th>Tên danh mục</th>
              <th style="display:none;">Mô tả</th>
              <th>Danh mục cha</th>
              <th>Thời gian tạo</th>
              <th>Hành động</th>
            </tr>
          </thead>
          <tbody>
            <?php  foreach ($categories as $key => $category) { ?>
              <tr>
                <td><?= $key + 1 ?></td>
                <td><img src="images/<?=$category['thumbnail'] ?>" style="width: 30px; height: 30px; border-radius: 50%;"></td>
                <td><a href="../Website/index.php?mod=post&act=postByCategory&category_id=<?=$category['id']?>"><?= $category['name'] ?></a></td>
                <td style="display:none;"><?= $category['description'] ?></td>
                <td><?php
                  foreach ($nameParentIds as $key => $value) {
                    if($category['parent_id'] == $value['id']){
                      echo $value['name'];
                    }
                  }
                  if($category['parent_id']==0){
                    echo "Danh mục cha";
                  }
                ?></td>
                <td><?= date_format(date_create($category['created_at']),"d/m/Y H:i:s") ?></td>
                <td>
                  <!-- <a href="index.php?mod=category&act=detail&id=<?= $category['id'] ?>" class="btn btn-info" class="btn btn-warning">Detail</a> -->
                  <a href="index.php?mod=category&act=handleEdit&id=<?= $category['id'] ?>" class="btn btn-warning" class="btn btn-warning">Sửa</a>
                  <a href="index.php?mod=category&act=deleteList&id=<?= $category['id'] ?>" class="btn btn-danger" class="btn btn-danger">Xóa</a>
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
