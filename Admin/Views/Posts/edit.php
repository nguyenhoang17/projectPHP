<?php require_once('Views/Partials/header.php');?>

<div class="container">
<h3 align="center">ZENT - Education And Technology Group</h3>
<h3 align="center">Update Category</h3>
<hr>
    <form action="index.php?mod=post&act=updatePost" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <input type="hidden" name="id" value="<?=$posts['id']?>">
            <label for="">Title</label>
            <input type="text" class="form-control" id="" placeholder="" name="title" value="<?=$posts['title']?>">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" id="" placeholder="" name="description" value="<?=$posts['description']?>">
        </div>
        <div class="form-group">
            <label for="">Thumbnail</label>
              <input type="file" class="form-control" id="" placeholder="" name="thumbnail" value="<?=$posts['thumbnail']?>">
        </div>
        <div class="form-group">
            <label for="">Category_id</label>
            <select id="cars" name="category_id"  class="form-control">
                <option value="0">No parent</option>
              <?php foreach ($categories as $value) {?>
              <option value="<?=$value['id']?>"><?=$value['name']?></option>
            <?php  } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Content</label>
              <input type="text" class="form-control" id="" placeholder="" name="content" value="<?=$posts['content']?>">
        </div>
        <div class="form-group">
            <label for="">Create_at</label>
            <input type="datetime-local" class="form-control" id="" placeholder="" name="created_at"  value="">
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>
<?php require_once('Views/Partials/footer.php');?>
