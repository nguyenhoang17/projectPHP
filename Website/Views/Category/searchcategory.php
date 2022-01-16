<?php
  require_once('Views/Partials/header.php');
?>
<div class="tada-search">
<form action="index.php?mod=category&act=handleSearch" method="POST">
      <div class="form-group-search">
          <input value="<?=$keyword['keysearch']?>" name="keysearch" type="search" class="search-field" placeholder="Search and hit enter...">
          <button type="submit" class="search-btn"><i class="icon-search4"></i></button>
      </div>
    </form>
</div>
<section class="tada-container content-posts blog-3-columns row">
  <div class="col-xs-12" style="background-color: #ffffff;
                        padding: 10px;
                        margin-top: -45px;
                        margin-bottom:40px;">
    <h2 style="margin-bottom:20px ;text-transform: uppercase; font-family: Times New Roman, Times, serif;">Danh Sách Danh Mục:</h2>
  </div>

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
                <span class="date"><?=date_format(date_create($category['created_at']),"d/m/Y H:i:s")?></span>
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
