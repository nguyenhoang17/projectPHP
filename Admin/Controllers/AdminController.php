<?php
//xử lý bắt buộc login ms cho vào page khác
require_once('BaseController.php');
  class AdminController extends BaseController{
    public function __construct(){

      if (!$this -> checkLogin()){//neeu chưa login thì chuyển vào trang login (Bắt buộc phải login)
        $this -> redirect('index.php?mod=auth&act=login');
      }
    }
    
//xử lý login tồn tại thì trả về true. k tồn tại trả về false
    protected function checkLogin(){
      if (isset($_SESSION['auth'])){
        return true;
      }else{
        return false;
      }
    }
  }
?>
