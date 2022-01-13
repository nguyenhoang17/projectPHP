<?php
  require_once('Views/Partials/header.php');
?>
<section class="tada-container content-posts blog-3-columns row">
  <div class="col-xs-12" style="background-color: #ffffff;
                        padding: 10px;
                        margin-top: -45px;
                        margin-bottom:40px;">
    <?php foreach ($categories as $key => $category) { ?>
      <p style="font-size: 20px; font-family: Times New Roman, Times, serif;"><?= $category['description'] ?></p>
  </div>
    <h2 style="margin-bottom:20px ;text-transform: uppercase; font-weight: bold; font-family: Times New Roman, Times, serif;">Các Bài Viết Của Danh Mục <?= $category['name'] ?>:</h2>
   <?php } ?>
<div class="tada-container content-posts blog-3-columns row " style="">



     <!-- *** CONTENT *** -->
     <?php foreach ($posts as $key => $post) { ?>
         <div id="dash" class="content col-xs-4 col-md-4 col-xl-4 col-lg-4 col-4">
           <!-- ARTICLE 1 -->
           <article id="abcde">
               <div class="post-image">
                   <img style="max-height: 170px;" src="../Admin/images/<?=$post['thumbnail']?>" alt="post image 1">
                     <div class="category"><a href="#"><?=$post['name']?></a></div>
                 </div>
                 <div class="post-text" style="padding: 20px 0px 0px 0px;">
                   <span class="date"><?=$post['created_at']?></span>
                     <h2><a href="index.php?mod=post&act=postDetail&id=<?=$post['id']?>"><?=$post['title']?></a></h2>
                     <!-- <p class="text" style="text-overflow:ellipsis; word-break : break-all;"><?=$post['content']?><a href="#"><i class="icon-arrow-right2"></i></a></p> -->
                     <p><a style="color:blue;" href="index.php?mod=post&act=postDetail&id=<?=$post['id']?>">Chi Tiết Bài Viết <i style="color: blue;" class="icon-arrow-right2"></i></a></p>
                 </div>
                 <div class="post-info">
                   <!-- <div class="post-by">Post By <a href="#">AD-Theme</a></div> -->
                     <div class="extra-info" style="float:none;">
                       <a href="#"><i class="fab fa-facebook-f"></i></a>
                     <a href="#"><i class="fab fa-twitter"></i></a>
                     <a href="#"><i class="fab fa-google-plus-square"></i></a>
                         <span class="comments"><?=$post['like_post']?><i class="far fa-thumbs-up"></i></span>
                     </div>
                     <div class="clearfix"></div>
                 </div>

             </article>
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


         </div>
           <?php } ?>

       <div class="clearfix"></div>

     </section>


<?php
  require_once('Views/Partials/footer.php');
?>
