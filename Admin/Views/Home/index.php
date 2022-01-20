<?php
  require_once('Views/Partials/header.php');
  ?>
                            <div class="container-fluid px-4">
                       <h1 class="mt-4">Bảng Điều Khiển</h1>
                       <ol class="breadcrumb mb-4">
                           <li class="breadcrumb-item active">Tùy chọn</li>
                       </ol>
                       <div class="row">
                           <div class="col-xl-4 col-md-6">
                               <div class="card bg-primary text-white mb-4">
                                   <div class="card-body">Danh Mục</div>
                                   <div class="card-footer d-flex align-items-center justify-content-between">
                                       <a class="small text-white stretched-link" href="index.php?mod=category&act=index">Xem Chi Tiết</a>
                                       <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-xl-4 col-md-6">
                               <div class="card bg-warning text-white mb-4">
                                   <div class="card-body">Bài Viết</div>
                                   <div class="card-footer d-flex align-items-center justify-content-between">
                                       <a class="small text-white stretched-link" href="index.php?mod=post&act=index">Xem Chi Tiết</a>
                                       <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-xl-4 col-md-6">
                               <div class="card bg-success text-white mb-4">
                                   <div class="card-body">Người Dùng</div>
                                   <div class="card-footer d-flex align-items-center justify-content-between">
                                       <a class="small text-white stretched-link" href="<?php if($_SESSION['auth']['email']=='admin@gmail.com'){
                                           echo "index.php?mod=user&act=index";
                                         };
                                         ?>">Xem Chi Tiết (Chỉ dành cho Admin)</a>
                                       <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                   </div>
                               </div>
                           </div>
                           <!-- <div class="col-xl-3 col-md-6">
                               <div class="card bg-danger text-white mb-4">
                                   <div class="card-body">Danger Card</div>
                                   <div class="card-footer d-flex align-items-center justify-content-between">
                                       <a class="small text-white stretched-link" href="#">View Details</a>
                                       <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                   </div>
                               </div>
                           </div> -->
                       </div>
                       <div class="row">
                           <div class="col-xl-6">
                               <div class="card mb-4">
                                   <div class="card-header">
                                       <i class="fas fa-chart-area me-1"></i>
                                       Biểu đồ vùng
                                   </div>
                                   <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                               </div>
                           </div>
                           <div class="col-xl-6">
                               <div class="card mb-4">
                                   <div class="card-header">
                                       <i class="fas fa-chart-bar me-1"></i>
                                       Biểu đồ cột
                                   </div>
                                   <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                               </div>
                           </div>
                       </div>

                   </div>
<?php
    require_once('Views/Partials/sidebar.php');
?>
  <?php
  require_once('Views/Partials/footer.php');
?>
