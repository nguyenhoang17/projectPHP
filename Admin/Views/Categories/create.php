<?php require_once('Views/Partials/header.php');?>

<div class="container">
<h3 align="center">ZENT - Education And Technology Group</h3>
<h3 align="center">Update Category</h3>
<hr>
    <form action="index.php?mod=category&act=store" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" id="" placeholder="" name="name" value="">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" id="" placeholder="" name="description" value="">
        </div>
        <div class="form-group">
            <label for="">Thumbnail</label>
              <input type="file" class="form-control" id="" placeholder="" name="thumbnail" value="">
        </div>
        <div class="form-group">
            <label for="">Parent_id</label>
            <select id="cars" name="parent_id"  class="form-control">
                <option value="0">No parent</option>
              <?php foreach ($categories as $value) {?>
              <option value="<?=$value['id']?>"><?=$value['name']?></option>
            <?php  } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Created_at</label>
          <input type="datetime-local" name="created_at" class="form-control" value="">
        </div>
        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
</div>
<?php require_once('Views/Partials/footer.php');?>
