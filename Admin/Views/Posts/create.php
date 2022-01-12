<?php require_once('Views/Partials/header.php');?>

<div class="container">
<h3 align="center"></h3>
<h3 align="center">Create Post</h3>
<hr>
    <form action="index.php?mod=post&act=store" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <input type="hidden" class="form-control" id="" placeholder="" name="like_post" value="0">
            <label for="">Title</label>
            <input type="text" class="form-control" id="" placeholder="" name="title" value="">
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
              <input type="text" class="form-control" id="" placeholder="" name="content" value="">
        </div>
        <div class="form-group">
            <label for="">Created_at</label>
          <input type="datetime-local" name="created_at" class="form-control" value=""
        </div>
      </br>
        <button type="submit" class="btn btn-primary">Add Post</button>
    </form>
</div>
<?php require_once('Views/Partials/footer.php');?>
