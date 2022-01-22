<?php

//Xử lý đăng ký đăng nhập
require_once("Controllers/BaseController.php");
require_once('Models/User.php');
  class AuthController extends BaseController{
    public function login()
    {
      $this -> view('auth/login.php'); //trở tới trang đăng nhập
    }
//xử lý Đăng nhập
    public function handleLogin()
    {
      $user = new User();//tạo 1 user
      if(empty($_POST['email'])){
        $_SESSION['error']['email']= "Không được để trống email!";
        $this -> redirect('index.php?mod=auth&act=login');
      }
      if (empty($_POST['password'])) {
        $_SESSION['error']['password']= "Không được để trống mật khẩu!";
        $this -> redirect('index.php?mod=auth&act=login');
      }

      if ($user -> checkLogin($_POST['email'], $_POST['password'])){
          $_SESSION['success']= "Đăng nhập thành công";
        $this-> redirect('index.php?mod=home&act=index');
      }else{
        $_SESSION['loginfalse']="";
          $this-> redirect('index.php?mod=auth&act=login');
      }
    }
//Đăng ký
    public function register()
    {
      $this -> view('auth/register.php');
    }

    public function handleRegister(){
      // $check= true;
      $user_register = new User();
      if(empty($_POST['email'])){
        $_SESSION['error']['email']= "Không được để trống email!";
        $this -> redirect('index.php?mod=auth&act=register');
      }
      if (empty($_POST['password'])) {
        $_SESSION['error']['password']= "Không được để trống mật khẩu!";
        $this -> redirect('index.php?mod=auth&act=register');
      }
      if(empty($_POST['name'])){
        $_SESSION['error']['name']= "Không được để trống tên!";
        $this -> redirect('index.php?mod=auth&act=register');
      }
      if($user_register -> checkRegister($_POST['email'])){
      $data = $_POST;
            if($data['password'] != ""){
              $data_insert = [
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => $data['password']
              ];

              $user = new User();
              $status = $user -> register($data_insert);
              $_SESSION['register']="";
                $this -> redirect("index.php?mod=auth&act=login");
            }else{
              $this -> redirect('index.php?mod=auth&act=register');
            }
      }else{
        $this -> redirect('index.php?mod=auth&act=register');
      }
    }

//Đăng xuất
    public function logout(){
      unset($_SESSION['auth']);
      $_SESSION['logout']="Đăng xuất thành công";
      $this -> redirect('index.php?mod=auth&act=login');
    }

  }
?>
