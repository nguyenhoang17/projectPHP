<?php
  class BaseController
  {
    //để xử lý dường dẫn
    public function view($path, $data = []){
      extract($data);
      require_once('Views/'.$path);
    }

//chuyển ướng tới url
    public function redirect($url){
      header("Location: " . $url);
    }
  }
?>
