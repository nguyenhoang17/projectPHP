
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Đăng Nhập</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>

</head>

<body class="bg-gradient-primary">

  <div class="container">

      <!-- Outer Row -->
      <div class="row justify-content-center">

          <div class="col-xl-10 col-lg-12 col-md-9">

              <div class="card o-hidden border-0 shadow-lg my-5">
                  <div class="card-body p-0">
                      <!-- Nested Row within Card Body -->
                      <div class="row">
                          <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                          <div class="col-lg-6">
                              <div class="p-5">
                                  <div class="text-center">
                                      <h1 class="h4 text-gray-900 mb-4">Chào Mừng Trở Lại!</h1>
                                  </div>
                                  <form class="user" action="index.php?mod=auth&act=handleLogin" method="POST">
                                      <div class="form-group">
                                          <input type="email" name="email" class="form-control form-control-user"
                                              id="exampleInputEmail" aria-describedby="emailHelp"
                                              placeholder="Nhập địa chỉ email">
                                              <?php if(isset($_SESSION['error']['email'])){ ?>
                                                  <span style="color:red;"> <?=$_SESSION['error']['email'];?></span>
                                              <?php }  ?>
                                      </div>
                                      <div class="form-group">
                                          <input type="password" name="password" class="form-control form-control-user"
                                              id="exampleInputPassword" placeholder="Mật khẩu">
                                              <?php if(isset($_SESSION['error']['password'])){ ?>
                                                  <span style="color:red;"> <?=$_SESSION['error']['password'];?></span>
                                              <?php }  ?>
                                      </div>
                                      <!-- <div class="form-group">
                                          <div class="custom-control custom-checkbox small">

                                          </div>
                                      </div> -->
                                      <input style="color:#ffffff;" class="bg-primary" type="submit" name="" value="Đăng Nhập">


                                      <!-- <hr>
                                      <a href="index.html" class="btn btn-google btn-user btn-block">
                                          <i class="fab fa-google fa-fw"></i> Login with Google
                                      </a>
                                      <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                          <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                      </a> -->
                                  </form>
                                  <hr>
                                  <div class="text-center">
                                      <a class="small" href="forgot-password.html">Quên mật khẩu</a>
                                  </div>
                                  <div class="text-center">
                                      <a class="small" href="index.php?mod=auth&act=register">Đăng Ký!</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>

      </div>

  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

<script>
  <?php if(isset($_SESSION['error'])){ ?>
  toastr.error('Không thể đăng nhập')
  <?php } ?>

  <?php if(isset($_SESSION['logout'])){ ?>
  toastr.success('Đăng xuất thành công')
  <?php } ?>

  <?php if(isset($_SESSION['register'])){ ?>
  toastr.success('Đăng ký thành công')
  <?php } ?>

  <?php if(isset($_SESSION['loginfalse'])){ ?>
  toastr.error('Tài khoản hoặc mật khẩu không chính xác!')
  <?php } ?>
</script>

</body>

</html>
<?php
if(isset($_SESSION['error'])){
  unset($_SESSION['error']);
}
if(isset($_SESSION['logout'])){
  unset($_SESSION['logout']);

}

if(isset($_SESSION['register'])){
  unset($_SESSION['register']);

}

if(isset($_SESSION['loginfalse'])){
  unset($_SESSION['loginfalse']);

}
?>
