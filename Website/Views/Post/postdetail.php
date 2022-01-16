<?php
  require_once('Views/Partials/header.php');
?>
<div class="tada-search">
<form action="index.php?mod=post&act=handleSearch" method="POST">
      <div class="form-group-search">
          <input name="keysearch" type="search" class="search-field" placeholder="Search and hit enter...">
          <button type="submit" class="search-btn"><i class="icon-search4"></i></button>
      </div>
    </form>
</div>
<section class="tada-container content-posts blog-1-column">

     <!-- *** CONTENT *** -->

    <div class="content" style="padding-right: 0px;">
        <!-- ARTICLE 1 -->
          <?php foreach ($posts as $key => $post) { ?>
        <article class="col-xs-12">
            <div class="post-image">
                <img style="max-height:500px;" src="../Admin/images/<?=$post['thumbnail']?>" alt="post image 1">
              </div>
              <div class="post-text" style="padding: 20px 50px 50px 50px;">
                <span class="date"><?=date_format(date_create($post['created_at']),"d/m/Y H:i:s")?> <span class="comments"><a href="index.php?mod=post&act=like&id=<?=$post['id']?>"><i style="float: right;font-size: 50px;" class="far fa-thumbs-up"></i></a></span></span>
                  <h1 style="font-size:50px;"><a style="text-transform: uppercase;font-size:25px;"><?=$post['title']?></a></h1>
                  <!-- <p class="text" style="text-overflow:ellipsis; word-break : break-all;"><?=$post['content']?><a href="#"><i class="icon-arrow-right2"></i></a></p> -->
                  <p style="word-wrap:break-word"><?=$post['content']?></p>
              </div>
              <div class="post-info">
                <!-- <div class="post-by">Post By <a href="#">AD-Theme</a></div> -->
                  <div class="extra-info">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-google-plus-square"></i></a>
                    <span class="comments"><?=$post['like_post']?><a href="index.php?mod=post&act=like&id=<?=$post['id']?>"><i class="far fa-thumbs-up"></i></a></span>
                  </div>
                  <div class="clearfix"></div>
              </div>

          </article>
  <?php } ?>

  <?php
    require_once('Views/Partials/footer.php');
  ?>
