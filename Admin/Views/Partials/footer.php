 <!-- </div> -->
<!-- </div> -->
</main>
<footer class="col-12 py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Hoang</div>
            <!-- <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div> -->
        </div>
    </div>
</footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="assets/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script>
  <?php if(isset($_SESSION['success'])){ ?>
  toastr.success('Đăng nhập thành công!')
  <?php } ?>
</script>

<script>
  <?php if(isset($_SESSION['addCategory'])){ ?>
  toastr.success('Thêm danh mục thành công!')
  <?php } ?>
</script>

<script>
  <?php if(isset($_SESSION['editCategory'])){ ?>
  toastr.success('Sửa danh mục thành công!')
  <?php } ?>
</script>

<script>
  <?php if(isset($_SESSION['deleteCategory'])){ ?>
  toastr.success('Xóa danh mục thành công!')
  <?php } ?>
</script>

<script>
  <?php if(isset($_SESSION['addPost'])){ ?>
  toastr.success('Thêm bài viết thành công!')
  <?php } ?>
</script>

<script>
  <?php if(isset($_SESSION['editPost'])){ ?>
  toastr.success('Sửa bài viết thành công!')
  <?php } ?>
</script>

<script>
  <?php if(isset($_SESSION['deletePost'])){ ?>
  toastr.success('Xóa bài viết thành công!')
  <?php } ?>
</script>

<script>
  <?php if(isset($_SESSION['editUser'])){ ?>
  toastr.success('Sửa tài khoản thành công!')
  <?php } ?>
</script>

<script>
  <?php if(isset($_SESSION['deleteUser'])){ ?>
  toastr.success('Xóa tài khoản thành công!')
  <?php } ?>
</script>


</body>
</html>
<?php
if(isset($_SESSION['success'])){
  unset($_SESSION['success']);
}

if(isset($_SESSION['addCategory'])){
  unset($_SESSION['addCategory']);
}

if(isset($_SESSION['editCategory'])){
  unset($_SESSION['editCategory']);
}
if(isset($_SESSION['deleteCategory'])){
  unset($_SESSION['deleteCategory']);
}

if(isset($_SESSION['addPost'])){
  unset($_SESSION['addPost']);
}

if(isset($_SESSION['editPost'])){
  unset($_SESSION['editPost']);
}
if(isset($_SESSION['deletePost'])){
  unset($_SESSION['deletePost']);
}

if(isset($_SESSION['editUser'])){
  unset($_SESSION['editUser']);
}
if(isset($_SESSION['deleteUser'])){
  unset($_SESSION['deleteUser']);
}
?>
