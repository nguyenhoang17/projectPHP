<?php
  require_once('Views/Partials/header.php');
?>
<section class="tada-container content-posts blog-3-columns row">
<div class="tada-container content-posts blog-3-columns row ">

     <!-- *** CONTENT COL 1 *** -->
       <?php foreach ($categories as $key => $category) {?>
    <div id="dash" class="content col-xs-4 col-md-4 col-xl-4 col-lg-4 col-4">
      <style media="screen">
      #dash {
        max-height: 700px;
        overflow: hidden;
      }
      #abcde h2 {
      width: 100%;
      white-space: nowrap;        overflow: hidden; text-overflow: ellipsis;
      }

      #abcde{
        max-height: 400px;
        overflow: hidden
      }

      </style>

        <!-- ARTICLE 1 -->
        <article id="abcde">
            <div class="post-image">
                <img style="max-height: 170px;" src="../Admin/images/<?=$category['thumbnail']?>" alt="category image ">
                  <!-- <div class="category"><a href="index.php?mod=post&act=postByCategory&category_id=<?=$category['id']?>"><?=$category['name']?></a></div> -->
              </div>
              <style media="screen">
              .post-text h1 a {
                color:#000;
                transition: all 0.3s ease 0s;
              }
              .post-text h1 a:hover {
                color:#9c8156;
                transition: all 0.3s ease 0s;
              }
              </style>
              <div class="post-text">
                <h1 style="text-transform: uppercase; margin-top: 0px; font-family: 'Playfair Display', serif;"><a style="font-size: 30px;" href="index.php?mod=post&act=postByCategory&category_id=<?=$category['id']?>"><?=$category['name']?></a></h1>
                <span class="date"><?=$category['created_at']?></span>
                  <h2><a href="#"><?=$category['description']?></a></h2>
              </div>
              <!-- <div class="post-info">
                <div class="post-by">Post By <a href="#">AD-Theme</a></div>
              </div> -->
          </article>


     </div>
       <?php } ?>
    <!-- <div class="clearfix"></div> -->

      <!-- <div class="navigation">
            <a href="#" class="prev"><i class="icon-arrow-left8"></i> Previous Posts</a>
              <a href="#" class="next">Next Posts <i class="icon-arrow-right8"></i></a>
              <div class="clearfix"></div>
      </div> -->

  </div>
</section>
  <?php
    require_once('Views/Partials/footer.php');
  ?>