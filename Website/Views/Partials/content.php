<!--******************************************************************************************************************************************
 ****************************************************************** SECTION *******************************************************************
 *******************************************************************************************************************************************-->
<section class="tada-container content-posts row">

    <!-- *** CONTENT *** -->

   <div class="content col-xs-8">

       <!-- ARTICLE 1 -->
        <?php  foreach ($posts as $key => $post) { ?>
       <article>
           <div class="post-image">
               <img style="max-height: 350px;" src="../Admin/images/<?=$post['thumbnail']?>" alt="post image 1">
                 <div class="category"><a href="index.php?mod=post&act=postByCategory&category_id=<?=$post['category_id']?>"><?=$post['name']?></a></div>
             </div>
             <div class="post-text">
               <span class="date"><?=date_format(date_create($post['created_at']),"d/m/Y H:i:s")?></span>
                 <h2><a href="index.php?mod=post&act=postDetail&id=<?=$post['id']?>"><?=$post['title']?></a></h2>
                 <p class="text" style="word-wrap:break-word; height: 100px; overflow: hidden;"><?=$post['content']?></p>
                 <a href="index.php?mod=post&act=postDetail&id=<?=$post['id']?>">Đọc thêm</a>
             </div>
             <div class="post-info">
               <!-- <div class="post-by">Post By <a href="#">AD-Theme</a></div> -->
                 <div class="extra-info">
                   <a href="#"><i class="fab fa-facebook-f"></i></a>
                 <a href="#"><i class="fab fa-twitter"></i></a>
                 <a href="#"><i class="fab fa-google-plus-square"></i></a>
                     <span class="comments"><?=$post['like_post']?><i class="far fa-thumbs-up"></i></span>
                 </div>
                 <div class="clearfix"></div>
             </div>
         </article>
           <?php } ?>

       <!-- <div class="navigation">
           <a href="#" class="prev"><i class="icon-arrow-left8"></i> Previous Posts</a>
             <a href="#" class="next">Next Posts <i class="icon-arrow-right8"></i></a>
             <div class="clearfix"></div>
         </div> -->

     </div>

     <!-- *** SIDEBAR *** -->

     <div class="sidebar col-xs-4">

         <!-- ABOUT ME -->

         <!-- <div class="widget about-me">
           <div class="ab-image">
               <img src="images/about-me.jpg" alt="about me">
                 <div class="ab-title">About Me</div>
             </div>
             <div class="ad-text">
               <p>Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                 <span class="signing"><img src="images/signing.png" alt="signing"></span>
             </div>
         </div> -->
         <div class="widget tags">
           <h3 style="" class="widget-title">
               Danh Mục
             </h3>
           <div class="tags-container">
             <?php foreach ($categories as $key => $category) { ?>
               <a href="index.php?mod=post&act=postByCategory&category_id=<?=$post['category_id']?>"><?=$category['name']?></a>
                <?php } ?>
             </div>
           <div class="clearfix"></div>
         </div>
         <!-- LATEST POSTS -->

         <div class="widget latest-posts">
           <h3 class="widget-title">
               Bài Viết Mới Nhất
             </h3>
             <?php foreach ($newPosts as $key => $newpost) { ?>
          <div class="posts-container">

            <div class="item">
                <img src="../Admin/images/<?=$newpost['thumbnail']?>" style="width : 100px; height : 85px;" alt="post 1" class="post-image">
                  <div class="info-post">
                    <h5><a href="index.php?mod=post&act=postDetail&id=<?=$newpost['id']?>"><?=$newpost['title']?></a></h5>
                    <span class="date"><?=date_format(date_create($newpost['created_at']),"d/m/Y H:i:s")?></span>
                  </div>
                  <div class="clearfix"></div>
              </div>

         </div>
               <?php } ?>

               <h3 style="margin-top: 50px;" class="widget-title">
                   Bài Viết Nhiều Like Nhất
                 </h3>
                 <?php foreach ($postByLikes as $key => $postByLike) { ?>
              <div class="posts-container">

                <div class="item">
                    <img src="../Admin/images/<?=$postByLike['thumbnail']?>" style="width : 100px; height : 85px;" alt="post 1" class="post-image">
                      <div class="info-post">
                        <h5><a href="index.php?mod=post&act=postDetail&id=<?=$postByLike['id']?>"><?=$postByLike['title']?></a></h5>
                        <span class="date"><?=date_format(date_create($postByLike['created_at']),"d/m/Y H:i:s")?></span>
                      </div>
                      <div class="clearfix"></div>
                  </div>

             </div>
                   <?php } ?>

         <!-- FOLLOW US -->


         <!-- TAGS -->


         <!-- ADVERTISING -->

         <div class="widget advertising" style="margin-top: 50px;">
     <div class="advertising-container">
               <img src="Publics/assets/images/banner5.jpg" alt="banner 350x300">
             </div>
   </div>

         <!-- NEWSLETTER -->

         <div class="widget newsletter">
           <h3 class="widget-title">
               Newsletter
             </h3>
           <div class="newsletter-container">
       <h4>DO NOT MISS OUR NEWS</h4>
                 <p>Sign up and receive the <br> latest news of our company</p>
                 <form>
                    <input type="email" class="newsletter-email" placeholder="Your email address...">
                    <button type="submit" class="newsletter-btn">Send</button>
                 </form>
             </div>
           <div class="clearfix"></div>
         </div>

     </div> <!-- #SIDEBAR -->

   <div class="clearfix"></div>

 </section>

 <!--******************************************************************************************************************************************
 ****************************************************************** FOOTER ********************************************************************
 *******************************************************************************************************************************************-->

 <footer class="tada-container" style="	margin:100px auto;">

   <!-- INSTAGRAM -->

   <div class="widget widget-gallery">
     <h3 class="widget-title">INSTAGRAM</h3>
     <div class="image">
           <a href="https://www.instagram.com/p/CYw7QQdhKsO/"><img style="width:183px; height:183px;" src="Publics/assets/images/img-gallery-7.jpg" alt="image gallery 1"></a>
             <a href="https://www.instagram.com/p/CYw7QQdhKsO/"><img style="width:183px; height:183px;" src="Publics/assets/images/img-gallery-8.jpg" alt="image gallery 2"></a>
             <a href="https://www.instagram.com/p/CYw7QQdhKsO/"><img style="width:183px; height:183px;" src="Publics/assets/images/img-gallery-9.jpg" alt="image gallery 3"></a>
             <a href="https://www.instagram.com/p/CYw7QQdhKsO/"><img style="width:183px; height:183px;" src="Publics/assets/images/img-gallery-10.jpg" alt="image gallery 4"></a>
             <a href="https://www.instagram.com/p/CYw7QQdhKsO/"><img style="width:183px; height:183px;" src="Publics/assets/images/img-gallery-11.jpg" alt="image gallery 5"></a>
             <a href="https://www.instagram.com/p/CYw7QQdhKsO/"><img style="width:183px; height:183px;" src="Publics/assets/images/img-gallery-12.jpg" alt="image gallery 6"></a>
         </div>
         <div class="clearfix"></div>
   </div>
